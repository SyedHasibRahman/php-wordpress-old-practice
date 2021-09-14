<?php
    class Facade{
        public function findApartments($place, $divId){
            $appfinder  = new ApartmentFinder();
            $geolocator = new GeoLocator();
            $gmap       = new GoogleMap();

            $appertments = $appfinder->locateApartments($place);
            foreach ($appertments as $appertment) {
               $locations[] = $geolocator->getLocations($appertment);
            }
            $gmap->initialize();
            $gmap->drawLocation($location);
            $gmap->dispatch($divId); 
        }
    }
?>