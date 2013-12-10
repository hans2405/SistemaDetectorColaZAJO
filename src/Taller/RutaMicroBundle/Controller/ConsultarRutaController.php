<?php

namespace Taller\RutaMicroBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Taller\RutaMicroBundle\Entity\Calle;
use Taller\RutaMicroBundle\Form\CalleType;
use Ivory\GoogleMap\Map;
use Ivory\GoogleMap\MapTypeId;
use Ivory\GoogleMap\Helper\MapHelper;
use Taller\RutaMicroBundle\Entity\Ruta;
use Ivory\GoogleMap\Overlays\Animation;
use Ivory\GoogleMap\Overlays\InfoWindow;

/**
 * ConsultarRuta controller.
 *
 */
class ConsultarRutaController extends Controller
{

    /**
     * Mostrar datos iniciales.
     *
     */
    public function consultarRutaAction($linea,$calle)
    {
        //-----------------sacando los datos de la entidad
        $datos_entidad = "<b>Nombre Entidad:</b>Sucursal Oficina Central<br>";
        $datos_entidad .= "<b>Cajas Disponibles:</b>13<br>";
        $datos_entidad .= "<b>Horario Atencion:</b>lu-vi 08:00 - 12:30<br>";
        $datos_entidad .= "<b>Personas en Caja:</b>10";
        //------------------------------------------------
    	$peticion = $this->getRequest();
    	$em = $this->getDoctrine()->getManager();
    	$micros = null;
        $lugar = null;
        $hostname = $this->getRequest()->getHost();

     
        $map = $this->get('ivory_google_map.map');
        
    	// centrado en la plaza principal de santa cruz
        $map->setCenter(-17.783139,-63.182162, true);
      
         //-----------Prueba infoWindows   
        $infoWindow = new InfoWindow();
        // Configure your info window options
        $infoWindow->setPrefixJavascriptVariable('info_window_');
        $infoWindow->setPosition(0, 0, true);
        $infoWindow->setPixelOffset(9.1, 5.1, 'px', 'pt');
        $infoWindow->setContent($datos_entidad);
        $infoWindow->setOpen(false);
        $infoWindow->setAutoOpen(true);
       // $infoWindow->setOpenEvent(MouseEvent::CLICK);
        $infoWindow->setAutoClose(false);
        $infoWindow->setOption('disableAutoPan', true);
        $infoWindow->setOption('zIndex', 10);
        $infoWindow->setOptions(array(
            'disableAutoPan' => true,
            'zIndex'         => 10,
        ));
         //---------------------------
//        $infoWindow = $this->get('ivory_google_map.info_window');
//        $infoWindow->
         
        $marker = $this->get('ivory_google_map.marker');
        $marker->setIcon("http://$hostname/tallerFinal/web/bundles/rutamicro/img/mapa/banco.png");
        $marker->setPrefixJavascriptVariable('marker_');
        $marker->setPosition(-17.78248,-63.18056);
        $marker->setInfoWindow($infoWindow);
        
        $marker->setAnimation(Animation::DROP);
        $marker->setOption('clickable', true);
            $marker->setOption('flat', true);
            $marker->setOptions(array(
                'clickable' => true,
                'flat'      => true,
                ));
        $map->addMarker($marker); 
        
        $map->setMapOption('zoom', 13);
        $map->setMapOption('mapTypeId', MapTypeId::ROADMAP);

        $map->setMapOptions(array(
			// 'disableDefaultUI'       => true,
			// 'disableDoubleClickZoom' => true
          ));

        $map->setStylesheetOptions(array(
          'width'  => '700px',
          'height' => '550px'
          ));

        $map->setLanguage('es');

        $lineaMicros = $em->getRepository('RutaMicroBundle:LineaMicro')->findAll();
        $calles = $em->getRepository('RutaMicroBundle:Calle')->findAll();
        $lugares = $em->getRepository('RutaMicroBundle:Lugar')->findAll();

        if ($peticion->getMethod() == 'POST') {

            $linea = $peticion->request->get('linea');
            $lugar = $peticion->request->get('lugar');
            $calle = $peticion->request->get('calle');

            // $rutaCalle = $em->getRepository('RutaMicroBundle:Ruta')->findRutaLugarCalle($lugar,$calle);
            
            $microsCalles = $em->getRepository('RutaMicroBundle:Ruta')->findMicroCalle($lugar, $calle);

        }
        $microsCalles = $em->getRepository('RutaMicroBundle:Ruta')->findMicroCalle($lugar, $calle);

        if ($linea != null) {

          $rutaCalles = $em->getRepository('RutaMicroBundle:Ruta')->findRutaCalle($lugar,$calle);
          $ruta = $em->getRepository('RutaMicroBundle:Ruta')->findRutaCalle($lugar,$calle);
          $rutas = $em->getRepository('RutaMicroBundle:Ruta')->findRutaMicro($linea);

          $i = 1;

          foreach ($rutas as $ruta) {
               	// Requests the ivory google map marker service
             $marker = $this->get('ivory_google_map.marker');
            	// puntos, las marcas de google
    	        // Configure your marker options
             if ($i == 1){
                $marker->setIcon("http://$hostname/tallerFinal/web/bundles/rutamicro/img/mapa/google-markerA.png");

            }
            else{
                $marker->setIcon("http://$hostname/tallerFinal/web/bundles/rutamicro/img/mapa/marker-green2.png");

            }

            $marker->setPrefixJavascriptVariable('marker_');
            $marker->setPosition($ruta->getLatitud(),$ruta->getLongitud());
            $marker->setAnimation(Animation::DROP);

            $marker->setOption('clickable', false);
            $marker->setOption('flat', true);
            $marker->setOptions(array(
                'clickable' => true,
                'flat'      => true,
                ));
            $map->addMarker($marker);
            $i++;
        }

        $k = $i - 2;

        $ultimaRuta = $rutas[$k];

        $marker = $this->get('ivory_google_map.marker');
        $marker->setIcon("http://$hostname/tallerFinal/web/bundles/rutamicro/img/mapa/google-markerB.png");
        $marker->setPrefixJavascriptVariable('marker_');
        $marker->setPosition($ultimaRuta->getLatitud(),$ultimaRuta->getLongitud());
        $marker->setAnimation(Animation::DROP);

        $marker->setOption('clickable', false);
        $marker->setOption('flat', true);
        $marker->setOptions(array(
            'clickable' => true,
            'flat'      => true,
            ));
        $map->addMarker($marker);


        foreach ($rutaCalles as $rutaCalle) {
            $marker = $this->get('ivory_google_map.marker');
           
            $marker->setIcon("http://$hostname/tallerFinal/web/bundles/rutamicro/img/mapa/marker-D.png");

            $marker->setPrefixJavascriptVariable('marker_');
            $marker->setPosition($rutaCalle->getLatitud(),$rutaCalle->getLongitud());
            $marker->setAnimation(Animation::DROP);

            $marker->setOption('clickable', false);
            $marker->setOption('flat', true);
            $marker->setOptions(array(
                'clickable' => true,
                'flat'      => true,
                ));
            $map->addMarker($marker);
        }
    }

    return $this->render('RutaMicroBundle:ConsultarRuta:index.html.twig', array(
      'map' => $map,
      'microsCalles' => $microsCalles,
      'lineaMicros' => $lineaMicros,
      'calles' => $calles,
      'lugares' => $lugares,
      'linea' => $linea,
      'calle' => $calle,
      ));
}

}
