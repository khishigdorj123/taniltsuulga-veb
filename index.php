<!DOCTYPE html>
<html lang="mn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Миний Танилцуулга</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="container">
        <div class="logo">Баттулга Хишигдорж</div>
        <nav>
            <ul>
                <li><a href="#" class="nav-link" data-target="home">Нүүр</a></li>
                <li><a href="#" class="nav-link" data-target="about">Танилцуулга</a></li>
                <li><a href="#" class="nav-link" data-target="skills">Ур чадвар</a></li>
                <li><a href="#" class="nav-link" data-target="contact">Холбоо барих</a></li>
            </ul>
        </nav>
    </div>
</header>

<section id="home" class="section active">
    <div class="hero-content">
        <h1>Сайн байна уу?</h1>
        <p>Намайг Хишигдорж гэдэг. Би вэб хөгжүүлэлт, программ хангамж сонирхдог оюутан.</p>
    </div>
</section>

<section id="about" class="section">
    <h2>Танилцуулга</h2>
    <p>Би программ хангамжийн чиглэлээр суралцдаг бөгөөд веб хөгжүүлэлт, UI/UX дизайн, мэдээллийн системд сонирхолтой.</p>
</section>

<section id="skills" class="section">
    <h2>Ур чадвар</h2>
    <ul>
        <li>HTML, CSS, JavaScript</li>
        <li>PHP & MySQL</li>
        <li>Laravel, WordPress</li>
        <li>Bootstrap, UI/UX дизайн</li>
    </ul>
</section>

<section id="contact" class="section">
    <h2>Холбоо барих</h2>
    <p> battulga@example.com</p>
    <p> 88888888 </p>
</section>


<footer>
    <div class="container">
        <p>© 2025 Баттулга Хишигдорж. Бүх эрх хуулиар хамгаалагдсан.</p>
        <p>Холбоо барих имэйл: battulga@example.com</p>
    </div>
</footer>

<script>
    const links = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('.section');

    links.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();

            const targetId = link.getAttribute('data-target');

            sections.forEach(sec => {
                sec.classList.remove('active');
                if (sec.id === targetId) {
                    sec.classList.add('active');
                }
            });
        });
    });
</script>

</body>
</html>
