<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Core\NotFoundException;

final class PageController extends Controller
{
    /** Map a route slug to the view file under Views/pages/. */
    private const ROUTES = [
        'home' => 'home',
        'country-detail' => 'country-detail',
        'index' => 'home',
        'index-two' => 'index-two',
        'index-three' => 'index-three',
        'about' => 'about',
        'about-city' => 'about-city',
        'about-competition' => 'about-competition',
        'about-organizer' => 'about-organizer',
        'account' => 'account',
        'awards' => 'awards',
        'blog' => 'blog',
        'blog-details' => 'blog-details',
        'cart' => 'cart',
        'checkout' => 'checkout',
        'contact-us' => 'contact-us',
        'contact' => 'contact',
        'emergency-contact' => 'emergency-contact',
        'emergency' => 'emergency-contact',
        'event' => 'event',
        'event-details' => 'event-details',
        'faq' => 'faq',
        'gallery' => 'gallery',
        'history' => 'history',
        'league-standings' => 'league-standings',
        'login' => 'login',
        'match-result' => 'match-result',
        'match-schedule' => 'match-schedule',
        'organization' => 'organization',
        'product-details' => 'product-details',
        'race-schedule' => 'race-schedule',
        'shop' => 'shop',
        'start-list' => 'start-list',
        'team' => 'team',
        'team-details' => 'team-details',
        'thank-you' => 'thank-you',
        'user-information' => 'user-information',
        'user-information-' => 'user-information',
        'venue' => 'venue',
        'velodrome' => 'velodrome',
        'velodrome-1' => 'velodrome-1',
        'tourism' => 'tourism',
        'error' => 'error',
        'our-players' => 'team',
        'arena' => 'venue',
        'price-table' => 'shop',
        'news-details' => 'blog-details',
        'wishlist' => 'shop',
        'score' => 'match-result',
    ];

    public function show(string $slug): void
    {
        $view = self::ROUTES[$slug] ?? null;

        if ($view === null) {
            throw new NotFoundException("No route registered for '{$slug}'.");
        }

        $this->view('pages/' . $view);
    }

    public function error(): void
    {
        $this->view('pages/error');
    }
}
