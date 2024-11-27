<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Carbon;

class watermark extends Controller
{
    public function ard(Request $request){

        $options = new Options();
        $options->set("isHtml5ParserEnabled", true);
        $options->set("isPhpEnabled", true); 
        
        $dompdf = new Dompdf($options);

        $html = '<!DOCTYPE html>';
        $html .= '<html>';
        $html .= '<head>';
        $html .= '<title>water mark</title>';
        $html .= '<style>';
        $html .= '    body { font-family: "bi", sans-serif; line-height: 1.6; margin: 0; padding: 0; background-size: cover; background-position: center; background-repeat: no-repeat; }';
        $html .= '    footer { text-align: center; padding: 0px; width: 100%; }';
        $html .= '</style>';
        $html .= '</head>';
        $html .= '<body>';

        $html .= 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque imperdiet justo at orci fermentum, at suscipit leo auctor. Vivamus ac ante a purus dignissim fermentum at eget purus. Nullam eu nisl ac eros facilisis blandit a non felis. Nunc eget interdum mi. Integer tincidunt augue metus, id suscipit turpis tincidunt et. Sed sollicitudin, mi ac ultricies interdum, sapien metus auctor odio, sed viverra turpis felis ac sapien. Sed ultrices tempor purus, et posuere dui luctus ac. Cras suscipit malesuada volutpat. Donec consequat, ante vel mollis sodales, urna enim feugiat risus, ac rutrum enim lorem nec est. Morbi varius erat vel leo fermentum, non fermentum odio tempus. Morbi consequat, mi non dapibus fermentum, purus nisi dictum sapien, non suscipit velit purus at mi.

        Curabitur nec nisi sem. Nam vel risus magna. Nulla a orci eget lectus iaculis feugiat vel ac ligula. Aliquam erat volutpat. Mauris sollicitudin nunc urna, id dictum neque tincidunt vitae. Cras suscipit volutpat ante, nec volutpat ipsum ullamcorper ac. Aenean suscipit egestas dolor, sed scelerisque metus ullamcorper et. Aliquam erat volutpat. Quisque vulputate, eros et convallis maximus, libero metus tempor est, nec porttitor dui tortor nec libero. Sed non bibendum augue, nec consectetur tortor. Aliquam ultricies felis id metus tincidunt gravida. Sed auctor maximus tincidunt. Integer bibendum tortor a gravida volutpat. Integer at purus non sapien suscipit pharetra.

        Duis viverra mi erat, vel fermentum libero malesuada ut. In ac ante a ipsum ullamcorper eleifend. Integer placerat ac tortor eu feugiat. Mauris dictum sapien eget tristique efficitur. Sed gravida, leo ut tristique suscipit, orci dui auctor elit, vel aliquet nulla ligula a lectus. Etiam non feugiat tortor. Curabitur id varius leo. Pellentesque sit amet turpis risus. Vestibulum tristique volutpat ligula. Etiam gravida, arcu sit amet varius placerat, sem turpis feugiat nisi, sed gravida felis eros eget nulla.

        Nullam tincidunt urna et eros dignissim convallis. Nullam sit amet odio auctor, auctor dui at, egestas odio. Aenean orci enim, fringilla et urna vitae, blandit gravida purus. Integer ornare urna id tortor euismod, sit amet congue nisi ultricies. Nulla euismod lectus id erat luctus mollis. Ut consequat, lorem vitae dignissim volutpat, mauris erat gravida ligula, sit amet viverra magna risus a libero. Cras scelerisque risus et lacus sollicitudin, eu porttitor sapien elementum. Ut bibendum fringilla nisl, a ultricies urna mollis vel. Proin euismod at elit non pretium. Suspendisse eget maximus nunc. Nunc sodales lectus vel velit suscipit, sed gravida eros placerat.

        Vivamus at libero sit amet libero aliquet interdum sit amet vel turpis. Curabitur et felis nec risus varius lobortis. Etiam fringilla ipsum purus, sed consequat lectus aliquet sed. In at malesuada urna. Sed dictum ipsum at sem sodales suscipit. Etiam pellentesque dui ac risus eleifend tempor. Cras nec nulla vitae libero vulputate posuere. Proin varius posuere erat, a tempus nunc lobortis et. Pellentesque eu ante ac elit dapibus malesuada. Aenean pharetra felis id volutpat laoreet. Sed sollicitudin urna at nulla vulputate, eu sodales nisl mollis. Integer sed nunc ligula.

        Proin sit amet est eget dolor volutpat lacinia. Aenean condimentum ac nulla ut dictum. Etiam varius dolor risus, eget vehicula libero facilisis ac. Ut quis ligula ac mi venenatis tempor ac in lorem. Nam quis ante ut ante placerat vestibulum ac ac purus. Sed facilisis mollis dui in finibus. Integer vel bibendum turpis. Phasellus non velit non risus fermentum ullamcorper et in nulla. Integer tincidunt vehicula odio, nec finibus ligula facilisis et. Duis non lectus eros. Ut ut eros eros. Duis in metus sit amet metus dignissim consequat id nec mi. Phasellus varius est sed erat mollis, nec vulputate nunc tincidunt.

        Fusce aliquam odio sapien, non iaculis dui efficitur sed. Curabitur dictum velit quis suscipit dapibus. Phasellus et velit sapien. Nam at purus mauris. Vivamus ultricies sapien eget nulla laoreet, non vehicula nunc tincidunt. Vestibulum quis lorem nec erat convallis placerat. Sed quis laoreet augue, in maximus magna. Curabitur vel sollicitudin justo. Nullam vel risus eu erat scelerisque sollicitudin. Etiam tristique mauris non arcu suscipit dictum. Ut euismod, odio vitae vulputate gravida, nulla sapien tincidunt arcu, vel egestas lorem nisl sed metus. Morbi tincidunt ipsum turpis, ac gravida nisl iaculis vel. Ut id magna ut elit auctor ullamcorper. In congue ante sit amet risus ultricies, non vehicula enim fringilla. Sed faucibus massa sit amet mi feugiat laoreet.

        Duis malesuada turpis purus, eu mollis urna varius ut. Etiam suscipit odio sed risus viverra, ut malesuada neque tempor. Phasellus sed velit orci. Nulla convallis nisl in ante efficitur, vitae venenatis ligula fringilla. In pellentesque euismod massa vel pretium. Mauris posuere, felis sit amet lacinia tempor, arcu tortor efficitur augue, ac feugiat purus libero sed lectus. Nulla interdum mauris nisl, sit amet maximus sapien ultricies ut. Donec non pharetra dui. Integer tincidunt, nulla vitae vehicula consequat, ligula neque placerat velit, sed ultricies enim nulla vel lorem. Proin at enim vel odio suscipit interdum id a ante. Proin volutpat lectus ac massa pretium suscipit. Phasellus in turpis convallis, scelerisque urna a, tincidunt felis.
        ';

        $html .= '</body>';
        $html .= '</html>';

        // echo $html;

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4');
        $dompdf->render();

        $canvas = $dompdf->getCanvas();
        $imageBase64 = base64_encode(file_get_contents(public_path('uploads/X.png')));
        $imageMimeType = 'image/png';
        $imageWidth = 500;
        $imageHeight = 500;
        $watermarkText = "GENERATED BY DOMPDF WATERMARK SYSTEM";

        $fontMetrics = $dompdf->getFontMetrics();

        $canvas->page_script(function ($pageNumber, $pageCount, $canvas) use ($fontMetrics, $imageBase64, $imageMimeType, $imageWidth, $imageHeight, $watermarkText) {
            $pageWidth = $canvas->get_width();
            $pageHeight = $canvas->get_height();

            $imageX = ($pageWidth - $imageWidth) / 2;
            $imageY = ($pageHeight - $imageHeight) / 2;

            $canvas->set_opacity(0.2);
            $canvas->image('data:' . $imageMimeType . ';base64,' . $imageBase64, $imageX, $imageY, $imageWidth, $imageHeight, 'png');

            $canvas->set_opacity(1);

            $font = $fontMetrics->getFont("Times-Roman");
            $fontSize = 9;
            $textWidth = $fontMetrics->getTextWidth($watermarkText, $font, $fontSize);
            $textX = 20;
            $textY = $pageHeight -200; 

            $canvas->page_text($textX, $textY, $watermarkText, $font, $fontSize, [0.5, 0.5, 0.5], 0.0, 3, -90);
            // $textX: X-coordinate (horizontal position) of the text, measured in points from the left edge of the page.
            // $textY: Y-coordinate (vertical position) of the text, measured in points from the top edge of the page.
            // $watermarkText: The text to be displayed as the watermark.
            // $font: The font used for the text. Must be a valid font recognized by Dompdf.
            // $fontSize: The size of the font in points.
            // [0.5, 0.5, 0.5]: RGB color values for the text. [0.5, 0.5, 0.5] represents a medium gray color.
            // 0.0: Word spacing. A value of 0.0 applies default spacing between words.
            // 3: Character spacing. A value of 3 adds spacing between each character in the text.
            // -90: Rotation angle in degrees. -90 rotates the text counterclockwise to appear vertically aligned.
            $canvas->set_opacity(1);
        });
        
        $dompdf->stream('Attendance report.pdf', ['Attachment' => false]);
    }
}
