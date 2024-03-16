<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title><?php echo $templateParams['title']; ?></title>
</head>
<body>

    <!-- Menu -->
    <aside class="float-start">
    	<div class="flex-shrink-0 p-3 bg-dark" style=" height: 100%;">
    		<a href="./index.php" class="d-flex align-items-center pb-3 mb-3 link-light text-decoration-none border-bottom">
    			<span class="fs-5 fw-semibold">F1Data</span>
    		</a>
    		<ul class="list-unstyled ps-0">
    			<li class="listEl mb-1">
    				<a href="./index.php" class="btn btn-dark d-inline-flex align-items-center rounded border-0" aria-expanded="true">
    					Home
    				</a>
    			</li>
    			<li class="listEl mb-1">
    				<button class="btn btn-dark btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#driver-collapse" aria-expanded="false">
    					Driver
    				</button>
    				<div class="collapse px-3" id="driver-collapse">
    					<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
    						<li><a href="../driver/addDriver.html" class="link-light d-inline-flex text-decoration-none rounded">Add</a></li>
    						<li><a href="./driverList.php" class="link-light d-inline-flex text-decoration-none rounded">List</a></li>
    					</ul>
    				</div>
    			</li>
    			<li class="listEl mb-1">
    				<button class="btn btn-dark btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#team-collapse" aria-expanded="false">
    					Team
    				</button>
    				<div class="collapse px-3" id="team-collapse">
    					<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
    						<li><a href="../team/addTeam.html" class="link-light d-inline-flex text-decoration-none rounded">Add</a></li>
    						<li><a href="./teamList.php" class="link-light d-inline-flex text-decoration-none rounded">List</a></li>
    					</ul>
    				</div>
    			</li>
    			<li class="listEl mb-1">
    				<button class="btn btn-dark btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#contract-collapse" aria-expanded="false">
    					Contract
    				</button>
    				<div class="collapse px-3" id="contract-collapse">
    					<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
    						<li><a href="../contract/addContract.html" class="link-light d-inline-flex text-decoration-none rounded">Add</a></li>
    						<li><a href="../contract/listContract.html" class="link-light d-inline-flex text-decoration-none rounded">List</a></li>
    					</ul>
    				</div>
    			</li>
    			<li class="listEl mb-1">
    				<button class="btn btn-dark btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#race-collapse" aria-expanded="false">
    					Races
    				</button>
    				<div class="collapse px-3" id="race-collapse">
    					<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
    						<li><a href="../race/addRace.html" class="link-light d-inline-flex text-decoration-none rounded">Add</a></li>
    						<li><a href="./raceList.php" class="link-light d-inline-flex text-decoration-none rounded">List</a></li>
    					</ul>
    				</div>
    			</li>
    			<li class="listEl mb-1">
    				<button class="btn btn-dark btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#season-collapse" aria-expanded="false">
    					Season
    				</button>
    				<div class="collapse px-3" id="season-collapse">
    					<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
    						<li><a href="../season/addSeason.html" class="link-light d-inline-flex text-decoration-none rounded">Add</a></li>
    						<li><a href="../season/listSeason.html" class="link-light d-inline-flex text-decoration-none rounded">List</a></li>
    					</ul>
    				</div>
    			</li>
    		</ul>
    	</div>
    </aside>

        <?php
        if(isset($templateParams['name'])){
            require $templateParams['name'];
        }
        ?>

</body>
</html>