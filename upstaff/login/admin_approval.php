<?php
// Start session safely
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Include database
require_once __DIR__ . '/../config/db.php';

// Check if user is logged in and is admin
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit();
}

// Fetch pending users
$stmt = $conn->prepare("SELECT * FROM users WHERE status = 'pending'");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Approval</title>
<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100">

<div class="max-w-7xl mx-auto p-6">

<div class="flex justify-between items-center mb-8">
<h2 class="text-2xl font-semibold text-slate-800">Account Approvals</h2>
<span class="text-sm text-slate-500">Manage pending registrations</span>
</div>

<div class="bg-white shadow rounded-lg overflow-hidden">

<table class="min-w-full text-sm text-left text-slate-700">

<thead class="bg-blue-600 text-white uppercase text-xs">
<tr>
<th class="px-4 py-3">ID</th>
<th class="px-4 py-3">Name</th>
<th class="px-4 py-3">Email</th>
<th class="px-4 py-3">Username</th>
<th class="px-4 py-3">Status</th>
<th class="px-4 py-3 text-center">Action</th>
</tr>
</thead>

<tbody class="divide-y divide-slate-200">

<?php if (count($users) > 0): ?>
<?php foreach ($users as $user): ?>

<tr class="hover:bg-slate-50 transition">

<td class="px-4 py-3"><?php echo $user['id']; ?></td>
<td class="px-4 py-3"><?php echo htmlspecialchars($user['firstname']); ?></td>
<td class="px-4 py-3"><?php echo htmlspecialchars($user['email']); ?></td>
<td class="px-4 py-3"><?php echo htmlspecialchars($user['username']); ?></td>

<td class="px-4 py-3">
<span class="px-3 py-1 text-xs rounded-full bg-yellow-200 text-yellow-800">
Pending
</span>
</td>

<td class="px-4 py-3 text-center">

<button onclick="openModal({
id:'<?php echo $user['id']; ?>',
firstname:'<?php echo htmlspecialchars($user['firstname']); ?>',
username:'<?php echo htmlspecialchars($user['username']); ?>',
email:'<?php echo htmlspecialchars($user['email']); ?>',
phone:'<?php echo htmlspecialchars($user['phone']); ?>',
address:'<?php echo htmlspecialchars($user['address']); ?>',
dob:'<?php echo htmlspecialchars($user['dob']); ?>',
status:'<?php echo htmlspecialchars($user['status']); ?>'
})"

class="px-4 py-2 text-white bg-blue-600 rounded-md hover:bg-blue-700">
View Info
</button>

</td>
</tr>

<?php endforeach; ?>
<?php else: ?>
<tr>
<td colspan="6" class="text-center py-6 text-slate-500">
No pending users
</td>
</tr>
<?php endif; ?>

</tbody>
</table>

</div>
</div>

<!-- eto para sa modal -->

<div id="infoModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">

<div class="bg-white w-full max-w-lg rounded-lg shadow-lg p-6">

<div class="relative border-b pb-3 mb-4 text-center">
<h3 class="text-lg font-semibold">User Information</h3>

<button onclick="closeModal()"
class="absolute right-0 top-0 text-xl">&times;</button>
</div>

<div class="grid grid-cols-2 gap-4 text-sm">

<div>
<label class="text-slate-500">First Name</label>
<p id="info_firstname"></p>
</div>

<div>
<label class="text-slate-500">Username</label>
<p id="info_username"></p>
</div>

<div class="col-span-2">
<label class="text-slate-500">Email</label>
<p id="info_email"></p>
</div>

<div>
<label class="text-slate-500">Phone</label>
<p id="info_phone"></p>
</div>

<div>
<label class="text-slate-500">DOB</label>
<p id="info_dob"></p>
</div>

<div class="col-span-2">
<label class="text-slate-500">Address</label>
<p id="info_address"></p>
</div>

<div class="col-span-2">
<label class="text-slate-500">Status</label>
<p id="info_status"></p>
</div>

</div>

<div class="mt-6 flex justify-end gap-3">

<button type="button"
onclick="approveUser()"
id="approveBtn"
class="px-5 py-2 bg-green-600 text-white rounded-md">
Approve
</button>

<button type="button"
onclick="rejectUser()"
id="rejectBtn"
class="px-5 py-2 bg-red-600 text-white rounded-md">
Reject
</button>

</div>
</div>
</div>

<script>

let currentUser = {};

function openModal(data){
    currentUser = data;

    document.getElementById('info_firstname').textContent = data.firstname;
    document.getElementById('info_username').textContent = data.username;
    document.getElementById('info_email').textContent = data.email;
    document.getElementById('info_phone').textContent = data.phone;
    document.getElementById('info_address').textContent = data.address;
    document.getElementById('info_dob').textContent = data.dob;
    document.getElementById('info_status').textContent = data.status;

    document.getElementById('infoModal').classList.remove('hidden');
}

function closeModal(){
    document.getElementById('infoModal').classList.add('hidden');
}

function approveUser(){

    if(!currentUser.id){
        alert("No user selected");
        return;
    }

    fetch(" ../approve_user.php",{
        method:"POST",
        headers:{'Content-Type':'application/x-www-form-urlencoded'},
        body:"id=" + currentUser.id
    })
    .then(res => res.text())
    .then(res => {
        if(res.trim() === "success"){
            alert("User Approved");
            location.reload();
        } else {
            alert("Error: " + res);
        }
    });
}

function rejectUser(){

    if(!currentUser.id){
        alert("No user selected");
        return;
    }

    fetch(" ../reject_user.php",{
        method:"POST",
        headers:{'Content-Type':'application/x-www-form-urlencoded'},
        body:"id=" + currentUser.id
    })
    .then(res => res.text())
    .then(res => {
        if(res.trim() === "success"){
            alert("User Rejected");
            location.reload();
        } else {
            alert("Error: " + res);
        }
    });
}
</script>

</body>
</html>