<?php
require_once "./app/Libraries/session.php";
class Tools
{
    public function setNotif($type = false, $title = false, $content = false)
    {
        $session = new session();
        $notifications = $session->get("notifications");
        $data['type'] = $type;
        $data['title'] = $title;
        $data['content'] = $content;
        $notifications[] = $data;
        return $session->set("notifications", $notifications);
    }
    public function showNotif()
    {
        $session = new session();
        $notifications = $session->get("notifications");
        $session->delete("notifications");
        if($notifications)
        {
            foreach($notifications as $notif)
            {
                ?>
                <div class="alert alert-<?php echo $notif['type']; ?>" role="alert">
                    <?php
                    echo $notif['content'];
                    ?>
                </div>
                <?php
            }
        }
        return null;
    }
}