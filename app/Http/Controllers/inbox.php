<?php

namespace App\Http\Controllers;

use Exception;
use Webklex\IMAP\Facades\Client;
use Webklex\PHPIMAP\Exceptions\AuthFailedException;

class inbox extends Controller
{
    protected $client;

    protected $folder;

    protected $messages;

    public function __construct()
    {
        $this->client = Client::account('default');
    }

    public function index()
    {
        try {
            $this->checkConnect();
            $paginator = $this->messages->paginate($per_page = 25, $page = null, $page_name = 'imap_page');
        }catch (AuthFailedException $e){
            return view('error', [
                'error' => 'Failed to authenticate...'
            ]);
        }catch (Exception $e) {
            return view('error', [
                'error' => 'Failed to connect and gathering data...'
            ]);
        }
        return view('sent', [
            'paginator' => $paginator
        ]);
    }

    public function show(int $UID)
    {
        return view('show', [
            'message' => $this->getItemById($UID)
        ]);
    }

    public function getItemById(int $UID)
    {
        try {
            $this->checkConnect();
        } catch (Exception $e) {
            return view('error', [
                'error' => 'Failed to connect and gathering data...'
            ]);
        }
        foreach ($this->messages as $oMessage) {
            if ($UID == $oMessage->getUid()) {
                return $oMessage;
            }
        }
    }

    public function checkConnect()
    {
        if (!$this->client->isConnected()) {
            $this->client->connect();
            $this->folder = $this->client->getFolderByName('Inbox');
            $this->messages = $this->folder->messages()->all()->get();
        }
    }
}
