<!-- TABLE -->
<table class="table table-striped table-hover">
            <!-- Table Head -->
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Titre</th>
                    <th>Mobile</th>
                    <th>Téléphone</th>
                </tr>
            </thead>

            <!-- Table Body -->
            <tbody>
                <?php foreach($owners as $owner): ?>
                <tr>
                    <td><?= $owner->nomproprietaire ?></td>
                    <td><?= $owner->prenomproprietaire ?></td>
                    <td><?= $owner->titre ?></td>
                    <td><?= $owner->telephonemobile ?></td>
                    <td><?= $owner->telephonepersonnel ?></td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>