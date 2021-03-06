<?php

namespace App\Console\Commands;

use App\Models\picture;
use Illuminate\Console\Command;
use simplehtmldom\HtmlWeb;

class scrape_data extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        ini_set('memory_limit', '-1');

        $web = new HtmlWeb();
        $page = 1;
        $count = 1;
        $code = 1;

        // $price = 50;
        while (true) {
            $html = $web->load('https://rozetka.com.ua/kartini/c4629249/page=' . $page);
            $lastPage = $html->find(".pagination__link", -1)->innertext;
            if (!preg_match('!\d+!', $lastPage, $lastPage)) {
                echo "error getting last page";
                return;
            }
            $lastPage = $lastPage[0];
            echo ' scraping https://rozetka.com.ua/kartini/c4629249/page=' . $page . "\n";

            foreach ($html->find('.goods-tile__picture.ng-star-inserted') as $element) {
                $html = $web->load($element->href);
                $title = $html->find(".product__title", 0);
                $img = $html->find(".product-photo__picture", 0);
                $description = $html->find('.product-about__description-content.text p', 0);
                $pr = $html->find('.detail-code', 0);
                $children = $pr->children; // get an array of children
                foreach ($children as $child) {
                    $child->outertext = ''; // This removes the element, but MAY NOT remove it from the original $myDiv
                }

                $id = trim($pr->innertext, " " . chr(0xC2) . chr(0xA0));

                if (!$img) {
                    echo "error getting image";
                    continue;
                }

                if (!$title) {
                    echo "error getting title";
                    continue;
                }
                $price_html = $web->load('https://common-api.rozetka.com.ua/v2/goods/get-price/?country==UA&id='
                    . $id);
                $arr = json_decode($price_html, true);

                $url = $img->src;
                $size = getimagesize($url);
                $extension = image_type_to_extension($size[2]);

                $picture = new picture();
                $picture->name = $title->innertext;
                $picture->price = $arr["price"];
                $picture->code = $code;
                $picture->description = $description;
                $picture->image = $count . $extension;
                $picture->save();

                $code++;
                if ($code > 3) {
                    $code = 1;
                }

                $count++;

                file_put_contents("public/img/" . $count . $extension, file_get_contents($url));
            }

            if ($page >= (int)$lastPage) {
                echo "scrapping successfully finished " . $count . " pictures were scraped";
                return;
            }

            $page++;
        }
    }
}
