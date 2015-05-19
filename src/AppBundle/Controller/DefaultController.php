<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /*
     * A
     */

    /**
     * @Route("/aby_sie_stalo.html", name="aby_sie_stalo")
     */
    public function AbySieStaloAction()
    {
        return $this->render('default/aby_sie_stalo.html.twig');
    }

    /**
     * @Route("/alegoria.html", name="alegoria")
     */
    public function alegoriaAction()
    {
        return $this->render('default/alegoria.html.twig');
    }

    /**
     * @Route("/ankieta.html", name="ankieta")
     */
    public function ankietaAction()
    {
        return $this->render('default/ankieta.html.twig');
    }

    /**
     * @Route("/architektura.html", name="architektura")
     */
    public function architekturaAction()
    {
        return $this->render('default/architektura.html.twig');
    }

    /**
     * @Route("/Astrolog.html", name="Astrolog")
     */
    public function AstrologAction()
    {
        return $this->render('default/Astrolog.html.twig');
    }

    /*
     * B
     */

    /**
     * @Route("/bambo.html", name="bambo")
     */
    public function bamboAction()
    {
        return $this->render('default/bambo.html.twig');
    }

    /**
     * @Route("/baranku-wielkanocny.html", name="baranku-wielkanocny")
     */
    public function BarankuWielkanocnyAction()
    {
        return $this->render('default/baranku-wielkanocny.html.twig');
    }

    /**
     * @Route("/bezmiar.html", name="bezmiar")
     */
    public function bezmiarAction()
    {
        return $this->render('default/bezmiar.html.twig');
    }

    /*
     * C
     */

    /**
     * @Route("/carpe-diem.html", name="carpe-diem")
     */
    public function carpeDiemAction()
    {
        return $this->render('default/carpe-diem.html.twig');
    }

    /**
     * @Route("/cud.html", name="cud")
     */
    public function cudAction()
    {
        return $this->render('default/cud.html.twig');
    }

    /*
     * D
     */

    /**
     * @Route("/deszcz-jesienny.html", name="dzeszcz-jesienny")
     */
    public function deszczJesiennyAction()
    {
        return $this->render('default/deszcz-jesienny.html.twig');
    }

    /**
     * @Route("/do_m.html", name="do_m")
     */
    public function domAction()
    {
        return $this->render('default/do_m.html.twig');
    }

    /**
     * @Route("/do-kolyski.html", name="do-kolyski")
     */
    public function doKolyskiAction()
    {
        return $this->render('default/do-kolyski.html.twig');
    }

    /**
     * @Route("/do-laury.html", name="do-laury")
     */
    public function doLauryAction()
    {
        return $this->render('default/do-laury.html.twig');
    }

    /**
     * @Route("/do-matki.html", name="do-matki")
     */
    public function DoMatkiAction()
    {
        return $this->render('default/do-matki.html.twig');
    }

    /**
     * @Route("/do-prostego-czlowieka.html", name="do-prostego-czlowieka")
     */
    public function doProstegoCzlowiekaAction()
    {
        return $this->render('default/do-prostego-czlowieka.html.twig');
    }

    /**
     * @Route("/dolosu.html", name="dolosu")
     */
    public function dolosuAction()
    {
        return $this->render('default/dolosu.html.twig');
    }

    /**
     * @Route("/dom-marzen.html", name="dom-marzen")
     */
    public function dommarzenAction()
    {
        return $this->render('default/dom-marzen.html.twig');
    }

    /**
     * @Route("/drzewa.html", name="drzewa")
     */
    public function drzewaAction()
    {
        return $this->render('default/drzewa.html.twig');
    }

    /**
     * @Route("/dzik.html", name="dzik")
     */
    public function dzikAction()
    {
        return $this->render('default/dzik.html.twig');
    }

    /*
     * E
     */

    /**
     * @Route("/elegia.html", name="Elegia-o-chlopcu-polskim")
     */
    public function elegiaAction()
    {
        return $this->render('default/elegia.html.twig');
    }

    /**
     * @Route("/eskimosek.html", name="Eskimosek")
     */
    public function eskimosekAction()
    {
        return $this->render('default/eskimosek.html.twig');
    }

    /**
     * @Route("/et-arceo.html", name="et-arceo")
     */
    public function EtArceoAction()
    {
        return $this->render('default/et-arceo.html.twig');
    }

    /*
     * F
     */

    /*
     * G
     */

    /**
     * @Route("/game-over.html", name="game-over")
     */
    public function gameoverAction()
    {
        return $this->render('default/game-over.html.twig');
    }

    /**
     * @Route("/ginsberg.html", name="ginsberg")
     */
    public function ginsbergAction()
    {
        return $this->render('default/ginsberg.html.twig');
    }

    /**
     * @Route("/Goryle.html", name="Goryle")
     */
    public function GoryleAction()
    {
        return $this->render('default/Goryle.html.twig');
    }

    /*
     * H
     */

    /**
     * @Route("/hymn.html", name="hymn")
     */
    public function hymnAction()
    {
        return $this->render('default/hymn.html.twig');
    }

    /*
     * I
     */
    
    /**
     * @Route("/czarodziejka.html", name="czarodziejka")
     */
    public function czarodziejkaAction()
    {
        return $this->render('default/czarodziejka.html.twig');
    }

    /*
     * J
     */

    /**
     * @Route("/jak-kuba-bogu.html", name="jak-kuba-bogu")
     */
    public function jakKubaBoguAction()
    {
        return $this->render('default/jak-kuba-bogu.html.twig');
    }

    /**
     * @Route("/jedzie-pociag.html", name="jedzie-pociag")
     */
    public function jedziePociagAction()
    {
        return $this->render('default/jedzie-pociag.html.twig');
    }

    /*
     * K
     */

    /**
     * @Route("/kara-smierci.html", name="kara-smierci")
     */
    public function karaSmierciAction()
    {
        return $this->render('default/kara-smierci.html.twig');
    }

    /**
     * @Route("/katar.html", name="katar")
     */
    public function katarAction()
    {
        return $this->render('default/katar.html.twig');
    }

    /**
     * @Route("/Kotek.html", name="Kotek")
     */
    public function KotekAction()
    {
        return $this->render('default/Kotek.html.twig');
    }

    /*
     * L
     */

    /**
     * @Route("/len.html", name="len")
     */
    public function lenAction()
    {
        return $this->render('default/len.html.twig');
    }

    /**
     * @Route("/list-do-syna.html", name="list-do-syna")
     */
    public function listdoSynaAction()
    {
        return $this->render('default/list-do-syna.html.twig');
    }

    /**
     * @Route("/lokomotywa.html", name="lokomotywa")
     */
    public function lokomotywaAction()
    {
        return $this->render('default/lokomotywa.html.twig');
    }

    /*
     * M
     */

    /**
     * @Route("/marsz.html", name="marsz")
     */
    public function marszAction()
    {
        return $this->render('default/marsz.html.twig');
    }

    /**
     * @Route("/miejcie-nadzieje.html", name="miejcie-nadzieje")
     */
    public function miejcieNadziejeAction()
    {
        return $this->render('default/miejcie-nadzieje.html.twig');
    }

    /**
     * @Route("/mlode-lata.html", name="za-moich-mlodych-lat")
     */
    public function mlodelatadychlatAction()
    {
        return $this->render('default/mlode-lata.html.twig');
    }

    /**
     * @Route("/modlitwa-wieczorna.html", name="modlitwa-wieczorna")
     */
    public function modlitwaWieczornaAction()
    {
        return $this->render('default/modlitwa-wieczorna.html.twig');
    }

    /**
     * @Route("/moja-pieszczotka.html", name="moja-pieszczotka")
     */
    public function mojaPieszczotkaAction()
    {
        return $this->render('default/moja-pieszczotka.html.twig');
    }

    /**
     * @Route("/moja-piosnka.html", name="moja-piosnka")
     */
    public function mojaPiosnkaAction()
    {
        return $this->render('default/moja-piosnka.html.twig');
    }

    /*
     * N
     */
    
    /**
     * @Route("/nakoncu.html", name="nakoncu")
     */
    public function nakoncuAction()
    {
        return $this->render('default/nakoncu.html.twig');
    }
    

    /**
     * @Route("/nic.html", name="nic")
     */
    public function nicAction()
    {
        return $this->render('default/nic.html.twig');
    }

    /**
     * @Route("/nie-wierze-w-nic.html", name="nie-wierze-w-nic")
     */
    public function nieWierzeWNicAction()
    {
        return $this->render('default/nie-wierze-w-nic.html.twig');
    }

    /**
     * @Route("/niepewnosc.html", name="niepewnosc")
     */
    public function niepewnoscAction()
    {
        return $this->render('default/niepewnosc.html.twig');
    }

    /*
     * O
     */
    
    /**
     * @Route("/odchodzenie.html", name="odchodzenie")
     */
    public function odchodzenieAction()
    {
        return $this->render('default/odchodzenie.html.twig');
    }

    /**
     * @Route("/ocean.html", name="ocean")
     */
    public function oceanAction()
    {
        return $this->render('default/ocean.html.twig');
    }

    /**
     * @Route("/oda.html", name="oda")
     */
    public function odaAction()
    {
        return $this->render('default/oda.html.twig');
    }

    /**
     * @Route("/Oprzyjdz.html", name="Oprzyjdz")
     */
    public function OprzyjdzAction()
    {
        return $this->render('default/Oprzyjdz.html.twig');
    }

    /**
     * @Route("/osiel-i-pies.html", name="osiel-i-pies")
     */
    public function piesAction()
    {
        return $this->render('default/osiel-i-pies.html.twig');
    }

    /*
     * P
     */

    /**
     * @Route("/petla.html", name="petla")
     */
    public function petlaAction()
    {
        return $this->render('default/petla.html.twig');
    }
    
    /**
     * @Route("/pani-twardowska.html", name="pani-twardowska")
     */
    public function paniTwardowskaAction()
    {
        return $this->render('default/pani-twardowska.html.twig');
    }

    /**
     * @Route("/pawel-i-gawel.html", name="pawel-i-gawel")
     */
    public function pawelIGawelAction()
    {
        return $this->render('default/pawel-i-gawel.html.twig');
    }

    /**
     * @Route("/pielgrzym.html", name="pielgrzym")
     */
    public function pielgrzymAction()
    {
        return $this->render('default/pielgrzym.html.twig');
    }

    /**
     * @Route("/pierwiosnek.html", name="pierwiosnek")
     */
    public function pierwiosnekAction()
    {
        return $this->render('default/pierwiosnek.html.twig');
    }

    /**
     * @Route("/Plonaca_kobieta.html", name="Plonaca_kobieta")
     */
    public function Plonaca_kobietaAction()
    {
        return $this->render('default/Plonaca_kobieta.html.twig');
    }

    /**
     * @Route("/poczekaj.html", name="poczekaj")
     */
    public function poczekajAction()
    {
        return $this->render('default/poczekaj.html.twig');
    }

    /**
     * @Route("/podroz-dunajcem.html", name="z-podrozy-dunajcem")
     */
    public function podrozdunajcemAction()
    {
        return $this->render('default/podroz-dunajcem.html.twig');
    }

    /**
     * @Route("/poemat-lublin.html", name="poemat-lublin")
     */
    public function poematLublinAction()
    {
        return $this->render('default/poemat-lublin.html.twig');
    }

    /**
     * @Route("/poswiatowska.html", name="poswiatowska")
     */
    public function poswiatowskaAction()
    {
        return $this->render('default/poswiatowska.html.twig');
    }

    /*
     * Q
     */

    /*
     * R
     */

    /**
     * @Route("/reka-reke-myje.html", name="reka-reke-myje")
     */
    public function rekaRekeMyjeAction()
    {
        return $this->render('default/reka-reke-myje.html.twig');
    }

    /**
     * @Route("/rozum-i-wiara.html", name="rozum-i-wiara")
     */
    public function rozumiwiaraAction()
    {
        return $this->render('default/rozum-i-wiara.html.twig');
    }

    /**
     * @Route("/rzepka.html", name="rzepka")
     */
    public function rzepkaAction()
    {
        return $this->render('default/rzepka.html.twig');
    }

    /**
     * @Route("/rzym.html", name="Rzym")
     */
    public function RzymAction()
    {
        return $this->render('default/rzym.html.twig');
    }

    /*
     * S
     */

    /**
     * @Route("/Sam.html", name="Sam")
     */
    public function SamAction()
    {
        return $this->render('default/Sam.html.twig');
    }

    /**
     * @Route("/Sonet.html", name="Sonet")
     */
    public function SonetAction()
    {
        return $this->render('default/Sonet.html.twig');
    }

    /**
     * @Route("/spacer.html", name="spacer")
     */
    public function spacerAction()
    {
        return $this->render('default/spacer.html.twig');
    }

    /**
     * @Route("/stepy-akermanskie.html", name="stepy-akermanskie")
     */
    public function stepyAkermanskieAction()
    {
        return $this->render('default/stepy-akermanskie.html.twig');
    }

    /**
     * @Route("/swiat.html", name="swiat")
     */
    public function swiatAction()
    {
        return $this->render('default/swiat.html.twig');
    }

    /*
     * T
     */

    /**
     * @Route("/testament-moj.html", name="testament-moj")
     */
    public function testamentMojAction()
    {
        return $this->render('default/testament-moj.html.twig');
    }

    /*
     * U
     */

    /*
     * V
     */

    /*
     * W
     */

    /**
     * @Route("/w-ogrodzie.html", name="w-ogrodzie")
     */
    public function wOgrodzieAction()
    {
        return $this->render('default/w-ogrodzie.html.twig');
    }

    /**
     * @Route("/w-weronie.html", name="w-weronie")
     */
    public function wweronieAction()
    {
        return $this->render('default/w-weronie.html.twig');
    }

    /**
     * @Route("/wiersz-o-chlopcu-polskim.html", name="wiersz-o-chlopcu-polskim")
     */
    public function wierszochlopcupolskimAction()
    {
        return $this->render('default/wiersz-o-chlopcu-polskim.html.twig');
    }

    /**
     * @Route("/wilczek.html", name="wilczek")
     */
    public function wilczekAction()
    {
        return $this->render('default/wilczek.html.twig');
    }

    /*
     * X
     */

    /*
     * Y
     */

    /*
     * Z
     */

    /**
     * @Route("/z-glowa-na-karabinie.html", name="z-glowa-na-karabinie")
     */
    public function zGlowaNaKarabinieAction()
    {
        return $this->render('default/z-glowa-na-karabinie.html.twig');
    }

    /**
     * @Route("/zasypiamy_na_slowach.html", name="zasypiamy_na_slowach")
     */
    public function zasypiamynaslowachAction()
    {
        return $this->render('default/zasypiamy_na_slowach.html.twig');
    }

    /**
     * @Route("/zegarek.html", name="zegarek")
     */
    public function zegarekAction()
    {
        return $this->render('default/zegarek.html.twig');
    }

    /**
     * @Route("/zima-miejska.html", name="zima-miejska")
     */
    public function zimamiejskaAction()
    {
        return $this->render('default/zima-miejska.html.twig');
    }

    /**
     * @Route("/zla-kolysanka.html", name="zla-kolysanka")
     */
    public function zlaKolysankaAction()
    {
        return $this->render('default/zla-kolysanka.html.twig');
    }

}
