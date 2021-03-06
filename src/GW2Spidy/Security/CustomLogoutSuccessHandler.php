<?php

namespace GW2Spidy\Security;

use Symfony\Component\HttpFoundation\Cookie;

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler;

class CustomLogoutSuccessHandler extends DefaultLogoutSuccessHandler {
    /**
     * {@inheritDoc}
     */
    public function onLogoutSuccess(Request $request) {
        $response = parent::onLogoutSuccess($request);

        $response->headers->setCookie(new Cookie('logged_in', null));

        return $response;
    }
}