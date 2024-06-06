<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title></title>
    
</head>
<body>
    <header>
    <a href="login.php">
            <img src="assets/img/logo.jpg" alt="logo">
        </a>
        <h1 id="animated-title">MIS MOVIDAS</h1>
    </header>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const h1 = document.getElementById('animated-title');
            const letters = h1.textContent.split('');

            h1.innerHTML = '';

            letters.forEach((letter, index) => {
                const span = document.createElement('span');
                span.textContent = letter;
                h1.appendChild(span);
            });

            const options = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const spans = h1.querySelectorAll('span');
                        spans.forEach((span, index) => {
                            setTimeout(() => {
                                span.classList.add('rotate');
                            }, index * 100); // Delay de 100ms entre cada letra
                        });
                        observer.unobserve(h1); // Deja de observar después de animar
                    }
                });
            }, options);

            observer.observe(h1);
        });
    </script>
</body>
</html>
