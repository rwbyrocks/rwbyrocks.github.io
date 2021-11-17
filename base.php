<script>
    window.onload = () => {
        function getCookie(name) {
            const value = `; ${document.cookie}`;
            const parts = value.split(`; ${name}=`);
            if (parts.length === 2) return parts.pop().split(';').shift();
        }

        var titles = ['Alice In Remnant', 'Obsessed with RWBY a totally normal amount', 'About as good at web design as she is coming up with titles']
        var title = titles[Math.floor(Math.random() * titles.length)] // pick random item
        document.title = title

        var backgrounds = ["url('/backgrounds/1.jpg')", "url('/backgrounds/2.jpg')", "url('/backgrounds/3.jpg')", "url('/backgrounds/4.jpg')", "url('/backgrounds/5.jpg')", ]
        var background = backgrounds[Math.floor(Math.random() * backgrounds.length)] // pick random item
        document.getElementById('background').style.backgroundImage = background;
    }
</script>

<head>
    <link rel="stylesheet" href="style.css">
</head>

<div id="background"></div>