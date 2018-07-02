<?php
/**
 * Ansel Configuration
 *
 */

return [
    'optimizerShowErrors' => true,
    'disableOptipng' => false,
    'disableJpegoptim' => false,
    'disableGifsicle' => false,
    'jpegoptimEnabled' => true,
  	'jpegoptim_bin' => '/usr/local/Cellar/jpegoptim/1.4.6/bin/jpegoptim',
];



$factory = new OptimizerFactory([
    'ignore_errors' => true,
    'pngquant_bin'  => '/usr/bin/pngquant',
    'pngcrush_bin'  => '/usr/bin/pngcrush',
    'pngout_bin'    => '/usr/bin/pngout',
    'optipng_bin'   => '/usr/bin/optipng',
    'advpng_bin'    => '/usr/bin/advpng',
    'jpegtran_bin'  => '/usr/bin/jpegtran',
    'jpegoptim_bin' => '/usr/local/Cellar/jpegoptim/1.4.6/bin/jpegoptim',
    'gifsicle_bin'  => '/usr/bin/gifsicle',
]);