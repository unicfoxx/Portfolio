<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

$uploadSuccess = false;

// Handle profile picture upload
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['profile_picture'])) {
    $targetDir = "uploads/";
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    $file = $_FILES['profile_picture'];
    $fileType = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($fileType, $allowedTypes) && $file['size'] < 2 * 1024 * 1024 && getimagesize($file['tmp_name'])) {
        $newName = uniqid() . "." . $fileType;
        $targetFile = $targetDir . $newName;

        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            $_SESSION['profilepicture'] = $newName;
            $uploadSuccess = true;
        }
    }
}

if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit();
}

$defaultImage = '/uploads/default.jpg';
$profilePicture = !empty($_SESSION['profilepicture']) ? 'uploads/' . htmlspecialchars($_SESSION['profilepicture']) : $defaultImage;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="CSS/stylesheet_index.css">
</head>
<body>
    <div id="dashboard">
        <aside id="sidebar">
            <img id="avatar" src="<?php echo $profilePicture; ?>" alt="Profile Picture">
            <h2><?= htmlspecialchars($_SESSION["username"]) ?></h2>
            <nav>
                <a href="index.php">Return</a>
                <a href="logout.php">Logout</a>
                <!-- Upload form -->
                <form id="uploadForm" method="post" enctype="multipart/form-data" style="display:inline;">
                    <input type="file" id="fileInput" name="profile_picture" accept="image/*" style="display: none;" required>
                    <a href="#" onclick="document.getElementById('fileInput').click(); return false;">Upload Profile Picture</a>
                </form>
            </nav>
        </aside>

        <main id="content">
            <h1><?= htmlspecialchars($_SESSION["username"]) ?>'s profile</h1>
            <?php if ($uploadSuccess): ?>
                <p style="color: green;">Profile picture updated!</p>
            <?php endif; ?>
        </main>
    </div>

    <script>
    document.getElementById('fileInput').addEventListener('change', function () {
        if (this.files.length > 0) {
            document.getElementById('uploadForm').submit();
        }
    });
    </script>
</body>
</html>
