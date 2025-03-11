<?php

namespace frontend\controllers;

class Ges
{
    public int $Ges6 = 4;
    public int $Ges27 = 3;
    public int $Ges28 = 3;
    public int $GesIspaysoy = 2;
    /**
     * @return int
     * Ўрта Чирчиқ ГЭС
     */
    public function UrtaChirchiq(): int
    {
        return $this->Ges6 + $this->Ges27 + $this->Ges28 + $this->GesIspaysoy;
    }
    //ГЭС-2Б Хишров ГЭС
    public int $Ges2b = 3;
    //ГЭС-3Б Иртишар ГЭС
    public int $Ges3b = 2;
    //Микро ГЭС-3Б
    public int $MicroGes3b = 1;
    //ГЭС-1Б Талигулян-1
    public int $Ges1b = 2;
    //Микро ГЭС-1Б
    public int $MicroGes1b = 2;
    //ГЭС-5Б Талигулян-3
    public int $Ges5b = 2;
    //Микро ГЭС-5Б
    public int $MicroGes5b = 2;
    //Ургут ГЭС
    public int $GesUrgut = 6;
    //Шаудар-1
    public int $Shaudar1 = 2;
    //Шаудар-2 (ПК-135)
    public int $Shaudar2 = 2;
    //Шаудар-3 (ПК-102)
    public int $Shaudar3 = 2;
    //МикроГЭС-10
    public int $MicroGes10 = 0;

    /**
     * @return int
     * Самарқанд ГЭС
     */
    public function Samarqand(): int
    {
        return $this->Ges2b + $this->Ges3b + $this->MicroGes3b + $this->Ges1b + $this->MicroGes1b + $this->Ges5b + $this->MicroGes5b + $this->GesUrgut + $this->Shaudar1 + $this->Shaudar2 + $this->Shaudar3 + $this->MicroGes10;
    }

    //ГЭС-8 Товоқсой ГЭС
    public int $Ges8 = 4;
    //ГЭС-7 Чирчиқ ГЭС
    public int $Ges7 = 4;
    //ГЭС-10 Оққовоқ ГЭС
    public int $Ges10 = 2;
    //Камолот ГЭС
    public int $Ges46 = 4;

    /**
     * @return int
     * Чирчиқ ГЭС
     */
    public function Chirchiq(): int
    {
        return $this->Ges8 + $this->Ges7 + $this->Ges10 + $this->Ges46;
    }

    //ГЭС-15 Оққовоқ ГЭС-2
    public int $Ges15 = 2;
    //ГЭС-11 Қибрай ГЭС
    public int $Ges11 = 1;
    //ГЭС-3 Қодирия ГЭС
    public int $Ges3 = 4;
    //ГЭС-12 Салар ГЭС
    public int $Ges12 = 1;
    //ГЭС-3А ГЭС
    public int $Ges3a = 2;

    /**
     * @return int
     * Чирчиқ ГЭС
     */
    public function Qodiriya(): int
    {
        return $this->Ges15 + $this->Ges11 + $this->Ges3 + $this->Ges12 + $this->Ges3a;
    }
    //ГЭС-16 Фарход ГЭС
    public int $Ges16 = 4;
    //Зомин микроГЭС
    public int $GesZomin = 2;
    /**
     * @return int
     * Фарход ГЭС
     */
    public function Farxod(): int
    {
        return $this->Ges16 + $this->GesZomin;
    }


    /**
     * @return int
     * Ҳамма каскад ва ГЭСлар
     */
    public function AllGes(): int
    {
        return $this->UrtaChirchiq() + $this->Samarqand() + $this->Chirchiq() + $this->Farxod();
    }
}

