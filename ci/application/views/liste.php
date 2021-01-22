

        <ul>
        <?php //var_dump($produits);
        
        foreach ($liste_produits as $row) {
            echo "<li>".$row->pro_id."</li>";
            echo "<li>".$row->pro_ref."</li>";
            echo "<li>".$row->pro_libelle."</li>";
            echo "<li>".$row->pro_prix."</li>";
            echo "<li>".$row->pro_description."</li><br>";
        }
        ?>
        </ul>
</body>
