
  <style>

body {
    background-color: rgb(0, 0, 0);
    font-family: "Yanone Kaffeesatz", sans-serif;
    font-weight: 600;
  }

  img {
    max-width: 100%;
    height: auto;
  }
.white{
    color: #ffffff;
    text-decoration-line: none;
}
  .ticket {
    width: 400px;
    height: 775px;
    color: #aaa;
    background-color: rgb(102, 102, 102);
    margin: 25px auto;
    position: relative;
  }

  .holes-top {
    height: 50px;
    width: 50px;
    /* background-color: Thistle; */
    border-radius: 50%;
    position: absolute;
    left: 50%;
    margin-left: -25px;
    top: -25px;
  }
  .holes-top:before, .holes-top:after {
    content: "";
    height: 50px;
    width: 50px;
    /* background-color: Thistle; */
    position: absolute;
    border-radius: 50%;
  }
  .holes-top:before {
    left: -200px;
  }
  .holes-top:after {
    left: 200px;
  }

  .holes-lower {
    position: relative;
    margin: 25px;
    border: 1px dashed #aaa;
  }
  .holes-lower:before, .holes-lower:after {
    content: "";
    height: 50px;
    width: 50px;
    /* background-color: Thistle; */
    position: absolute;
    border-radius: 50%;
  }
  .holes-lower:before {
    top: -25px;
    left: -50px;
  }
  .holes-lower:after {
    top: -25px;
    left: 350px;
  }

  .title {
    padding: 50px 25px 10px;
  }

  .cinema {
    color: #000000;
    font-size: 22px;
  }
.red{
    font-size: 48px;
    color: rgb(236, 14, 14);
}
  .movie-title {
    font-size: 50px;
    color: #ffffff;
  }

  .info {
    background-color: #aaa;
    padding: 15px 25px;
  }

  table {
    width: 100%;
    font-size: 18px;
    margin-bottom: 15px;
  }
  table tr {
    margin-bottom: 10px;
  }
  table th {
    text-align: left;
  }
  table th:nth-of-type(1) {
    width: 38%;
  }
  table th:nth-of-type(2) {
    width: 40%;
  }
  table th:nth-of-type(3) {
    width: 15%;
  }
  table td {
    width: 33%;
    font-size: 32px;
  }

  .bigger {
    font-size: 48px;
  }

  .serial {
    background-color: #aaa;
    padding: 25px;
  }
  .serial table {
    border-collapse: collapse;
    margin: 0 auto;
  }
  .serial td {
    width: 3px;
    height: 50px;
  }

  .numbers td {
    font-size: 16px;
    text-align: center;
  }
  </style>

