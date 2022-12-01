<?php

use OOP\app\Controller\Petugas;
use OOP\app\Controller\Peminjam;
use OOP\app\Controller\Buku;
use OOP\app\Controller\Subs;
use OOP\app\Controller\Member_trx;
use OOP\app\Core\Router;
use OOP\app\Middleware\Auth;
use OOP\app\Middleware\Guest;

require_once __DIR__ . '/../vendor/autoload.php';
session_start();
Router::addRoute('GET', '/', Petugas::class, 'index', []);

//Petugas
Router::addRoute('GET', '/petugas', Petugas::class, 'index_petugas', []);
Router::addRoute('GET', '/login_page', Petugas::class, 'login_page', []);
Router::addRoute('POST', '/login', Petugas::class, 'login', []);
Router::addRoute('GET', '/add_petugas', Petugas::class, 'add', []);
Router::addRoute('POST', '/insert_petugas', Petugas::class, 'insert', []);
Router::addRoute('POST', '/delete_petugas', Petugas::class, 'delete', []);
Router::addRoute('POST', '/new_petugas/:id', Petugas::class, 'new', []);
Router::addRoute('POST', '/update_petugas', Petugas::class, 'update', []);

//Peminjam
Router::addRoute('GET', '/peminjam', Peminjam::class, 'index_peminjam', []);
Router::addRoute('GET', '/add_peminjam', Peminjam::class, 'add', []);
Router::addRoute('POST', '/insert_peminjam', Peminjam::class, 'insert', []);
Router::addRoute('POST', '/delete_peminjam', Peminjam::class, 'delete', []);
Router::addRoute('POST', '/new_peminjam/:id', Peminjam::class, 'new', []);
Router::addRoute('POST', '/update_peminjam', Peminjam::class, 'update', []);


//Buku
Router::addRoute('GET', '/buku', Buku::class, 'index_buku', []);
Router::addRoute('GET', '/add_buku', Buku::class, 'add', []);
Router::addRoute('POST', '/insert_buku', Buku::class, 'insert', []);
Router::addRoute('POST', '/delete_buku', Buku::class, 'delete', []);
Router::addRoute('POST', '/new_buku/:id', Buku::class, 'new', []);
Router::addRoute('POST', '/update_buku', Buku::class, 'update', []);

//Subscription
Router::addRoute('GET', '/subs', Subs::class, 'index_subs', []);
Router::addRoute('GET', '/add_subs', Subs::class, 'add', []);
Router::addRoute('POST', '/insert_subs', Subs::class, 'insert', []);
Router::addRoute('POST', '/delete_subs', Subs::class, 'delete', []);
Router::addRoute('POST', '/new_subs/:id', Subs::class, 'new', []);
Router::addRoute('POST', '/update_subs', Subs::class, 'update', []);

//Member_trx
Router::addRoute('GET', '/member_trx', Member_trx::class, 'index_member_trx', []);
Router::addRoute('GET', '/add_member_trx', Member_trx::class, 'add', []);
Router::addRoute('POST', '/insert_member_trx', Member_trx::class, 'insert', []);
Router::addRoute('POST', '/delete_member_trx', Member_trx::class, 'delete', []);
Router::addRoute('POST', '/new_member_trx/:id', Member_trx::class, 'new', []);
Router::addRoute('POST', '/update_member_trx', Member_trx::class, 'update', []);


Router::run();   