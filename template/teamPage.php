<main class="float-end d-flex align-items-center flex-column">
<?php
$team = $templateParams['team'];
$contracts = $db->getTeamContract($team['idTeam']);
?>
<div class="p-4 text-center" style="margin-top:20px">
    <h3 class="p-2 mx-auto"><?php echo $team['teamName']; ?></h3>
    <ul class="list-group list-group-horizontal col-10 mx-3 mb-3">
        <li class="list-group-item"><h6>Nationality:</h6><p><?php echo $team['nationality']; ?></p></li>
        <li class="list-group-item"><h6>Headquarter:</h6><p><?php echo $team['headquarter']; ?></p></li>
    </ul>
</div>

<div class="d-flex border-top" style="height: 50%;">
    <div class="tableDiv my-4 mx-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Driver name</th>
                    <th scope="col">Contract sign year</th>
                    <th scope="col">Contract expiration year</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($contracts as $contract): ?>
                <tr>
                    <td><a href="driverDetail.php?driverId=<?php echo $contract['idDriver'] ?>"><?php echo $contract['driverName'] . ' ' . $contract['driverSurname'];?></a></td>
                    <td><?php echo $contract['signingYear']; ?></td>
                    <td><?php echo $contract['expirationYear']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="tableDiv my-4 mx-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Employee name</th>
                    <th scope="col">Role</th>
                    <th scope="col">Nationality</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Frederic Vasseur</td>
                    <td>Team Principal</td>
                    <td>France</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</main>
