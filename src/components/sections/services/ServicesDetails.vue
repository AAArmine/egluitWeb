<template>
  <section id ='details' class="wrapper-70">
    <h2 class="title">Hvad forhandler vi?</h2>
    <p class="small short">
      Vi specialiserer os ikke blot i skræddersyede programmer, der
      effektiviserer din lagerstyring og fungerer som din pålidelige IT-partner,
      men vi tilbyder også et bredt udvalg af hjælpemidler. Dette omfatter
      populære softwareløsninger som Uniconta og Microsoft Office-pakker samt
      hardware fra anerkendte mærker som Lenovo og Hewlett Packard Enterprise.
      Nedenfor præsenteres fordelene ved vores hjælpemidler:
    </p>
    <div class="flex-cont">
      <div class="item">
        <div class="card">
          <img
            src="@/assets/images/dollar.png"
            alt="dollar-icon"
            class="card-img"
          />
          <div>
            <h3 class="secontary-title">Uniconta</h3>
            <p class="small">
              Uniconta er en komplet løsning inden for ERP og økonomistyring,
              der hjælper din virksomhed med at digitalisere og reducere
              manuelle arbejdsopgaver. Det omfatter alt fra regnskab, økonomi,
              debitorer, kreditorer, CRM, lagerstyring, logistik,
              projektstyring, anlæg og produktionsplanlægning. Med Uniconta er
              du klar til at imødekomme kravene om digitalisering af bilag og
              arbejdsprocesser og dermed styrke fundamentet for din virksomhed.
            </p>
          </div>
        </div>
        <div class="card">
          <img
            src="@/assets/images/enterprice.png"
            alt="enterprice"
            class="card-img"
          />
          <div>
            <h3 class="secontary-title">HP & HP Enterprise</h3>
            <p class="small">
              Vi forhandler HP hardvare i form af computere og computerskærme.
              Derudover så er vi forhandler af den erhvervsmæssige del af HP.
              Via HP Enterprise forhandler vi hardvare i form af servere.
            </p>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="card">
          <img
            src="@/assets/images/monitor.png"
            alt="monitor"
            class="card-img"
          />
          <div>
            <h3 class="secontary-title">Lenovo</h3>
            <p class="small">
              Vi er stolte forhandlere af Lenovo hardware, da det giver os
              mulighed for at tilbyde vores kunder de allerbedste produkter.
              Lenovo hardware omfatter primært computere og computerskærme.
            </p>
          </div>
        </div>
        <div class="card">
          <img
            src="@/assets/images/cloud.png"
            alt="cloud"
            class="card-img"
          />
          <div>
            <h3 class="secontary-title">Microsoft</h3>
            <p class="small">
              Microsoft 365 er vores clouddrevne produktivitetsplatform, som
              tilbyder en række fordele med et abonnement:
              <ul>
                <li>Få adgang til de nyeste produktivitetsapps som Microsoft Teams, Word, Excel, PowerPoint, Outlook, OneDrive og mere.</li>
            <li>Modtag regelmæssige funktioner og opdateringer, som ikke er tilgængelige andre steder.</li>  
            </ul>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "ServicesDetails",
};
</script>

<style scoped lang="scss">
#details {
  padding: 50px 0;
  .small, li {
    font-size: 15.5px;
    line-height: 30px;
  }
  .short {
    max-width: 70%;
  }
  .flex-cont {
    display: flex;
    justify-content: space-between;
     @media (max-width: $mobile-width) {
      flex-wrap: wrap;
    }
    .item {
      width: 46%;
       @media (max-width: $mobile-width) {
      width: 100%;
    }
      .card {
        display: flex;
        align-items: start;
        padding-top: 10px;
        .secontary-title {
          font-size: 24px;
          font-weight: 400;
        }
        .card-img {
          width: 30px;
          height: auto;
          margin: 25px 20px 0 0;
          opacity: 0.7;
        }
        li{
            margin-top: 20px;
        }
      }
    }
  }
}
</style>
