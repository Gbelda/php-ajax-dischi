<?php

header("Content-type: text/css; charset: UTF-8");


?>
    
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .d-flex{
        display: flex;
    }

    .flex-wrap{
        flex-wrap: wrap;
    }

    .justify-center{
        justify-content: center;
    }
    
    header{
        background-color: #2E3A46;
    }
        
    .header {
        height: 80px;
        padding-left: 20px;
        padding-top: 10px;
    }
    
    .header img{
        height: 60px;
    }

    main{
        background-color: #1E2D3B;
        padding-bottom: 4rem;
    }
    
    main .container{
        width: 90%;
        margin: auto;

    }

    .card{
        min-height: 400px;
        background-color: #2E3A46;
        min-width: 196px;
        max-width: 196px;
        margin: 2rem;
    }

    .card img {
      height: 200px;
      padding: 1rem;
      width: 200px;
    }

    .title{
        text-align: center;
        padding: 0px 1rem;
        color: white;
        font-size: 1.4rem;
    }

    .meta_data{
        text-align: center;
        padding-top: 3rem;
        font-size: 1.1rem;
        font-weight: normal;
        color: gray;
    }

    .year{
        display: block;
    }

    .select{
        padding-top: 2rem;
    }

    h4{
        color: white;
        margin-right: .5rem;
    }