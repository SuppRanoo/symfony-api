<?php
    namespace ApiController\Controller;
    use Symfony\Component\HttpFoundation\JsonResponse;

    class ApiController {

        public function index()
        {
            return new JsonResponse(
                ["message"=>"Welcome to the matrix"]
            );
        }
    }