<?php include('header.php'); ?>

<main>
    <h1>Galerie d'Œuvres</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Image</th>
                <th>Titre</th>
                <th>Artiste</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Tableau contenant les œuvres
            $oeuvres = [
                ["img/clark-van-der-beken.png", "Dodomu", "Mia Tozerski", "Mia Tozerski est une artiste peintre ukrainienne réfugiée de la guerre. Sur cette œuvre, Dodomu ("domicile" en ukrainien), elle nous montre la tristesse du peuple ukrainien qu'elle partage, ayant elle-même dû quitter son foyer. L'œuvre évoque le drapeau liquéfié d'une Ukraine en souffrance, pleurant la mort de ses compatriotes. Ce travail chargé d'émotion est le symbole d'un événement qui marquera l'Histoire. Cette peinture à l'acrylique rayonne grâce à son fond lisse et ses mélanges de couleurs éclatantes."],
                ["img/pawel-czerwinski-3.png" , "Aashaaheen Baadal", "Anaisha Devi", " Sur cette oeuvre conceptuelle à la fois organique, minérale et liquide, Anaisha Devi nous transporte dans un nuage noir envoûtant. Un sombre tableau qui, par son verni éclatant, rayonne tel un marbre poli. Une oeuvre à la cohérence transcendantale, exécutée à la perfection"],
                ["img/dan-cristian-padure.png", "Nightlife Traffic", "Andrew Forsythe", " Quisque accumsan ultrices ligula vestibulum posuere. Aliquam feugiat ligula eget massa blandit condimentum. Morbi volutpat erat luctus suscipit pellentesque. Quisque cursus tempor nibh at sollicitudin. Sed blandit libero velit. Etiam tincidunt facilisis mollis. Ut mollis nunc sit amet lacinia luctus. Suspendisse volutpat enim semper arcu rutrum, et iaculis risus interdum. Duis at libero.."],
                ["img/clark-van-der-beken.png", "Le refuge de l'Havre", "Mia Tozerski", "Nam tempus neque nec felis venenatis auctor. Nam velit risus, lobortis eu quam non, interdum efficitur nibh. Phasellus a augue ac orci lacinia mattis et vel lectus. Sed nec tellus urna. Donec at turpis turpis. Cras quam tellus, imperdiet vitae finibus id, varius quis felis. Maecenas blandit eleifend risus, vel hendrerit erat dignissim id. Nullam at laoreet nibh. Nulla gravida varius sollicitudin. Etiam non aliquam diam, tempor varius sapien. Aenean et velit eu nisi lobortis massa nunc."],
                ["img/steve-johnson.png", "Red Washover", "Kit Van Der Borght", "Nunc euismod ullamcorper tortor, id efficitur ante interdum in. Integer eu condimentum nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras viverra suscipit feugiat. Mauris vehicula luctus tellus, eu hendrerit libero laoreet ut. In tristique vehicula nisl in tempus. Morbi tempus aliquet gravida. In eget est congue, rhoncus sapien at, cursus metus."],
                ["img/pawel-czerwinski.png", "Chromatics", "Jean-Michel Delatronchette", "Vivamus commodo non libero at hendrerit. In lacinia dui sit amet pellentesque iaculis. Donec at ultricies sem porttitor."],
                ["img/jazmin-quaynor.png", "Digital Negative", "Hamish McKee", "Integer in nisl posuere, pulvinar ex ac, tincidunt risus. Nullam vel lorem et leo dignissim accumsan. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempor, magna non consectetur dapibus, est libero iaculis lacus, eget semper turpis orci vitae felis. Fusce eget molestie."],
                ["img/steve-johnson-6.png", "Blast from the past", "Juliette Baskerville", " Nunc fermentum purus dapibus justo fermentum auctor. Maecenas non tincidunt leo. Morbi vitae iaculis sem. Donec quis scelerisque massa. Fusce quis accumsan diam, et interdum lectus. Suspendisse mattis pulvinar vehicula. Duis nisi."],
                ["img/victor-grabarczyk.png", "Hurricane", "Natalie Wellington", "Aliquam tristique tempus molestie. Nulla nisl eros, dapibus eu lectus in, cursus accumsan arcu. Suspendisse bibendum diam dignissim porta maximus. Praesent sollicitudin consectetur faucibus. Cras pulvinar massa a orci rutrum, id blandit enim viverra. Praesent sed congue augue. Suspendisse efficitur, nisl quis finibus faucibus, lacus felis bibendum leo, eu euismod lacus mauris in felis. Quisque dignissim et dui et aliquet. Donec ut lobortis eros, vitae tincidunt augue metus."],
                ["img/pawel-czerwinski-2.png", "La marée rouge", "Martin Rodriguez", "Vivamus quis odio vel ligula feugiat facilisis. Donec eleifend pellentesque massa, ut malesuada est bibendum sit amet. Morbi tincidunt nec tellus vel ornare. Mauris dolor tellus, gravida eget euismod eu, viverra eget urna. Phasellus feugiat ipsum nec lorem accumsan, sed porta quam dictum massa nunc."],
                ["img/steve-johnson-2.png", "Asimilacion", "Angel Sanchez-Fernandez", "Mauris ut justo ac mi pretium eleifend. Curabitur sed magna ut elit facilisis pharetra. Maecenas tincidunt fermentum ipsum ut sollicitudin. Nullam feugiat, neque vel egestas sollicitudin, quam leo mattis mauris, in lacinia sem mi id risus. Nullam ultrices quam eu leo auctor tempus. Fusce vestibulum mi ex, vel ultricies purus mollis sollicitudin. Aenean ac vehicula ipsum. Nam turpis ante, ultrices eget odio sed, luctus bibendum mauris sodales sed."],
                ["img/fly-d.png", "La Galaxia Gialla", "Eduardo Tancredi", "Mauris maximus, orci sollicitudin ultrices elementum, tellus neque feugiat leo, quis lobortis purus neque vel lectus. Ut sagittis eros id lectus porttitor tincidunt. Donec scelerisque diam nec felis egestas, eget finibus ante porttitor. Sed malesuada sapien ut semper accumsan. Duis tristique dui vel egestas porttitor. Nunc tristique dapibus orci a amet."],
                ["img/orfeas-green.png", "Puffy Amalgamate", "Sandro De Blasi", "Donec semper a massa quis congue. In malesuada lorem ligula, ut posuere magna pulvinar in. Proin vitae enim gravida, commodo odio."],
                ["img/steve-johnson-4.png", "Mirage", "Stéphanie Kaiser", "Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam iaculis lorem ac ex tristique egestas et nec sapien. Donec tincidunt id erat sit amet tempus. Nullam vel molestie dui. Duis a neque massa. Vivamus quis ornare lacus. Nullam eleifend condimentum egestas. Vivamus magna purus, fermentum mollis mauris sed, consectetur interdum libero. Duis interdum tortor tellus, eget sollicitudin quis."],
                ["img/steve-johnson-3.png", "Blaue Gelbe Muster", "Adelheid Von Schreiber", "Curabitur dui odio, porta vel tempor sed, consectetur vitae mi. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus nec."],
            ];

            // Générer les lignes du tableau
            foreach ($oeuvres as $oeuvre) {
                echo "<tr>";
                echo "<td><img src='{$oeuvre[0]}' alt='{$oeuvre[1]}' width='100'></td>";
                echo "<td>{$oeuvre[1]}</td>";
                echo "<td>{$oeuvre[2]}</td>";
                echo "<td>{$oeuvre[3]}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</main>

<?php include('footer.php'); ?>
