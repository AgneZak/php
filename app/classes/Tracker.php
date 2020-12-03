<?php


namespace App;


class Tracker
{
    private $track;

    /**
     * @return mixed
     */
    public function getTrack()
    {
        return $this->track;
    }


    /**
     * If user is logged in, returns its visit info.
     *
     * @return array|false
     */
    public function getTrackingData()
    {
        $user = App::$session->getUser();

        $page = "{$_SERVER['SERVER_NAME']}{$_SERVER["REQUEST_URI"]}";
        $date = date('Y-m-d H:i:s', time());

        if ($user) {
            return $this->track = ['email' => $user['email'], 'page' => $page, 'time' => $date];
        } else {
            return $this->track = ['user_id' => session_id(), 'page' => $page, 'time' => $date];
        }

    }

    /**
     * If there is session gets track info and saves it to database.
     *
     * @return bool
     */
    public function save(): bool
    {
            App::$db->insertRow('track_users', $this->getTrack());

            return true;

    }
//is login.php turi kviesti
    public function update(){
//        if (!isset(email))
//        foreach ()
//        App::$db->updateRow('track_users', $this->getTrack());

    }

    /**
     * Gets users page history by selecting his email.
     *
     * @param $email
     * @return array
     */
    public function userHistory($email): array
    {
        return App::$db->getRowsWhere('track_users', ['email' => $email]);
    }


}