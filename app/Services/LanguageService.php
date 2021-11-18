<?php

namespace App\Services;

use App\Models\Language;
use App\Models\CountriesLanguages;

class LanguageService {


    public function addLanguages(int $country_id, array|string $languages)
    {
        $languageArr = explode(",", $languages);
        foreach ($languageArr as $singleLang) {
            // szukam w bazie takiego języka
            $language = Language::findWithName($singleLang);
            if($language){
                // jesli jezyk jest już dodany to zapisuję do bazy relację języka z nowym państwem
                CountriesLanguages::create(
                    [
                        'country_id'  => $country_id,
                        'language_id' => $language->id
                    ]
                );
            }else{
                // jesli ne ma, dodaje nowy jezyk i zapisuję drelację
                $language = Language::create(
                    [
                        'name'       => $singleLang,
                        'country_id' => $country_id
                    ]
                );
                CountriesLanguages::create(
                    [
                        'country_id'  => $country_id,
                        'language_id' => $language->id
                    ]
                );
            }
        }
    }

}
