<?php

namespace App\Http\Enums;

enum IngredientTypes: string 
{
    case DAIRY = 0;
    case FATS_OILS_STOCKS = 1;
    case FRUITS_VEGETABLES = 2;
    case GRAINS_NUTS = 3;
    case HERBS_SPICES = 4;
    case MEATS = 5;
    case PASTA_RICE_PULSES = 6;
    case OTHER = 7;
}

