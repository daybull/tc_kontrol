<?php
class Identity{
  var $apiurl = 'https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx?WSDL';

  public static function kimlikDogrula($tc,$ad,$soyad,$bornYear){
    $output = 0;
        if(!empty($tc) && !empty($ad) && !empty($soyad) && !empty($bornYear)){
          $variable = [
            'TCKimlikNo'=>$tc,
            'Ad'=>$ad,
            'Soyad'=>$soyad,
            'DogumYili'=>$bornYear,
          ];
          $client = new SoapClient('https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx?WSDL');
          $response = $client->TCKimlikNoDogrula($variable);
          $output = $response->TCKimlikNoDogrulaResult;
        }
    return $output;
  }

}
