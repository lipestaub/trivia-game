<?php
    class Router {
        public function getResponse(Request $request) {
            var_dump($request->getRoute());
        }
    }
?>