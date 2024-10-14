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
    }

    p {
        color: #666;
    }

    a {
        display: block;
        margin: 10px 0;
        padding: 10px;
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

<div class="container">
    <h1>Welcome to Yugine's Friends</h1>
    <p>List of Friends</p>
    <a href="<?= base_url('index/pia');?>">Pia</a>
    <a href="<?= base_url('index/laine');?>">Laine</a>
    <a href="<?= base_url('index/lance');?>">Lance</a>
    <a href="<?= base_url('index/jm');?>">JM</a>
</div>
