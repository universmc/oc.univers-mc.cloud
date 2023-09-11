<div class="main-container">
    <table class="containair-table">
        <tr>
            <td class="cell"></td>
            <td class="cell"></td>
            <td class="cell"></td>
        </tr>
        <tr>
            <td class="cell"></td>
            <td class="central-cell">
                <?php 
                // Inclusion dynamique de la page demandée
                $page = $_GET['page'] ?? 'home';
                $allowed_pages = ['home', 'cours', 'projet', 'soutenances', 'credits'];
                if (in_array($page, $allowed_pages)) {
                    include "../pages/{$page}.php";
                } else {
                    echo "Page non trouvée";
                }
                ?>
            </td>
            <td class="cell"></td>
        </tr>
        <tr>
            <td class="cell"></td>
            <td class="cell"></td>
            <td class="cell"></td>
        </tr>
    </table>
</div>
