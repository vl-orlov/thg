<?
$current_page = isset($_REQUEST['page']) ? htmlspecialchars($_REQUEST['page']) : '';
if (empty($current_page)) {
    $current_page = 'carousel';
}
$active_home = ($current_page == 'home') ? 'active' : '';
$active_play = ($current_page == 'play') ? 'active' : '';
$active_profile = ($current_page == 'profile') ? 'active' : '';
?>
<div class="footer">
    <button onclick="window.location.href='?page=home'" class="footer_item <?=$active_home?>" aria-label="Home">
        <img src="img/icons/home_icon.svg" alt="Home" class="footer_icon">
    </button>
    <button onclick="window.location.href='?page=play'" class="footer_item <?=$active_play?>" aria-label="Play">
        <img src="img/icons/play_icon.svg" alt="Play" class="footer_icon">
    </button>
    <button onclick="window.location.href='?page=profile'" class="footer_item <?=$active_profile?>" aria-label="Profile">
        <img src="img/icons/profile_icon.svg" alt="Profile" class="footer_icon">
    </button>
</div>