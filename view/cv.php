                        <?php

                        $file= 'C:/Users/djawed/Desktop/CV_Boumansour_dev.pdf';
                        $filename='C:/Users/djawed/Desktop/CV_Boumansour_dev.pdf';
                        header('content-type: application/pdf') ;
                        header('content-disposition: inline;filename"'. $filename .'"');
                        header('content-transfer-encoding: binary');
                        header('accept-ranges: bytes');
                        @readfile($file);
                        
                        ?>