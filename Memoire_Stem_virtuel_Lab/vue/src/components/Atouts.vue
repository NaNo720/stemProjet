<template>
<div>
    <H1> Les atouts</H1>
    <section id="Atouts">

        <div class="contaner">
            <div class="boxElement">
                <div class="icon" id="child1">01</div>
                <div class="contentbox">
                    <h3>Favoriser la mise en activité des élèves</h3>
                    <p>
                        Notre collection propose des mises en activité variées, pour construire sa propre réflexion et réfléchir par soi-même aux enjeux de sa lecture
                        .</p>
                </div>
            </div>
        </div>
        <div class="contaner">
            <div class="boxElement">
                <div class="icon" id="child2">02</div>
                <div class="contentbox">
                    <h3>Des activités pour différencier simplement</h3>
                    <p> 
                        À réaliser en classe ou à la maison, seul(e), en binôme ou en groupe : nos exercices et activités de différents niveaux de difficulté favorisent la différenciation.
                        .</p>
                </div>
            </div>
        </div>
        <div class="contaner">
            <div class="boxElement">
                <div class="icon" id="child3">03</div>
                <div class="contentbox">
                    <h3>Encourager la pratique </h3>
                    <p>
Pour s’entraîner toute l’année, retrouvez des exercices associés à la pratique de l’oral pour chaque extrait étudié.
                        .</p>
                </div>
            </div>
        </div>
    </section>

</div>
</template>

<script>
export default {
    name: "Atouts"
}
</script>

<style scoped>
h1 {
    text-transform: capitalize;
    color: #363635;
}

section {

    margin: 0;
    padding: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    font-family: 'Poppis', sans-serif;
    color: #363635;
    background: #D9D9D9;
    flex-wrap: wrap;
    justify-content: space-between;
}

.boxElement {

    position: relative;
    width: 350px;
    height: 450px;
    padding: 40px;
    background: #ffff;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 1);
    margin: 20px;
    box-sizing: border-box;
    overflow: hidden;

}

.icon {
    position: relative;
    width: 80px;
    height: 80px;
    background: #000;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
    border-radius: 50%;
    color: #ffff;
    font-size: 40px;
    font-weight: 700;
    transition: 1s;
}

#child1 {
    box-shadow: 0 0 0 0 #363635;
    background: #363635;
}

#child1:hover {
    box-shadow: 0 0 0 400px#363635;

}

#child2 {
    box-shadow: 0 0 0 0 #FF9D02;
    background: #FF9D02;
}

#child2:hover {
    box-shadow: 0 0 0 400px#FF9D02;

}

#child3 {
    box-shadow: 0 0 0 0 #307B74;
    background: #307B74;
}

#child3:hover {
    box-shadow: 0 0 0 400px#307B74;

}

.contentbox {
    position: relative;
    z-index: 1;
    transition: 0.5s;
}

@media (max-width: 768px) {
    section {
        flex-direction: column;
        /* Change la disposition en colonne pour les petits écrans */
    }
}
</style>
