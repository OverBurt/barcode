<?php

return [
    'store_path' => public_path("/"),
    'datamatrix' => [
        'style' => 1, // 1=SQUARE 2=RECTANGULAR
        'format' => null, // if null autodiscover min size

        // RECTANGULAR FORMATS
        // 0: 8x18
        // 1: 8x32
        // 2: 12x26
        // 3: 12x36
        // 4: 16x36
        // 5: 16x48

        // SQUARE FORMATS:
        // 0: 10x10
        // 1: 12x12
        // 2:14x14
        // 3: 16x16
        // 4: 18x18
        // 5: 20x20
        // 6: 22x22
        // 7: 24x24
        // 8: 26x26
        // 9: 32x32
        // 10: 36x36
        // 11: 40x40
        // 12: 44x44
        // 13: 48x48
        // 14: 52x52
        // 15: 64x64
        // 16: 72x72
        // 17: 80x80
        // 18: 88x88
        // 19: 96x96
        // 20: 104x104
        // 21: 120x120
        // 22: 132x132
        // 23: 144x144

    ],
];
