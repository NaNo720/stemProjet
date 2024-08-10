<template>
    <div>

        <footer id="Contact">
            <div class="row">
                <div class="col">
                    <img src="https://www.floatui.com/logo.svg" width="120" height="50" alt="Float UI logo"
                        class="logo" />
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Eaque officiis blanditiis necessitatibus laudantium debitis aliquid
                        ab earum!</p>
                </div>
                <div class="col">
                    <h3> Contact</h3>
                    <p>Senegal, Dakar</p>
                    <p>Keur Massar, Code Postal 17000</p>
                    <p class="email-id">stemlab245@gmail.com</p>
                    <h4>+221 - 783800369</h4>
                </div>
                <div class="col">
                    <i class="uil uil-facebook"></i>
                </div>
                <div class="col">
                    <i class="uil uil-instagram-alt"></i>
                </div>
                <div class="col">
                    <i class="uil uil-youtube"></i>
                </div>
                
            </div>
        </footer>

    </div>
</template>

<script>
export default {
    name: "Contact"
}
</script>

<style scoped>
* {
    margin: 0;
    padding: 0;
    font-family: 'poppins', sans-serif;
    box-sizing: border-box;

}

footer {
    width: 100%;
    margin-top: 20%;
    border-top: #D9D9D9 solid 1px;
    color: #363635;
    padding: 100px 0 30px;
    font-size: 13px;
    line-height: 20px;
}

.row {
    width: 85%;
    margin: auto;
    display: flex;
    
}

.col {
    flex-basis: 25%;
    padding: 10px;
    text-align: left;
    
}

.logo {
    margin-bottom: 30px;
}

h3 {
    width: 400px;
    margin-bottom: 40px;
    padding: 13px;
    
}

.email-id {
    width: fit-content;
    border-bottom: 1px solid #363635;
    margin: 0px;
    position: relative;
    cursor: pointer;
    margin: 20px 0;
}
.uil{
   
    cursor: pointer;
    font-size: 35px;
}
</style>
