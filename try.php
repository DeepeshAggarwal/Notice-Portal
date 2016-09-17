<?php
							$file = './uploads/1st semester.pdf';
							$filename = '1st semester.pdf';

							header('Content-type: application/pdf');
							header('Content-Disposition: inline; filename="' . $filename . '"');
							header('Content-Transfer-Encoding: binary');
							header('Content-Length: ' . filesize($file));
							header('Accept-Ranges: bytes');

							@readfile($file);
						?>