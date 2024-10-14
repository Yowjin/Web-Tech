<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        max-width: 600px;
        width: 100%;
        background: white;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        text-align: center;
    }

    h1 {
        color: #333;
        margin-bottom: 10px;
    }

    h5 {
        color: #666;
        margin-bottom: 20px;
    }

    p {
        color: #444;
        margin-bottom: 20px;
    }

    h2 {
        color: #333;
        margin-bottom: 10px;
    }

    ul {
        list-style-type: disc;
        padding-left: 20px;
        text-align: left;
        color: #555;
    }

    li {
        margin: 5px 0;
    }

    a {
        display: inline-block;
        margin-top: 20px;
        padding: 10px 20px;
        color: #007bff;
        text-decoration: none;
        border: 2px solid #007bff;
        border-radius: 5px;
        transition: all 0.3s ease-in-out;
    }

    a:hover {
        background-color: #007bff;
        color: white;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        transform: translateY(-3px);
    }


</style>

<h1>Jm Barbosa</h1>
<h5>Here is a short information about Jm Barbosa</h5>
<p>He is a 4th Year Nursing Student at OLFU<br>
</p>
<h2>List of Hobbies</h2>
<ul style="list-style-type:disc;">
    <li>Biking</li>
    <li>Hiking</li>
    <li>Music</li>
</ul>


<a href="<?= base_url('index/lance');?>">Back</a>
<a href="<?= base_url('index/index');?>">Home</a>
