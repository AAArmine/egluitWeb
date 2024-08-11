<template>
  <section class="expert">
    <div class="expert-wrapper">
      <div class="expert-item">
        <h2 class="expert-title">
          EKSPERTER I OPSÆTNING AF SERVERE OG NETVÆRK
        </h2>
      </div>
      <div class="expert-item text">
        <ul>
          <li>
            Hos Eglu IT er vi eksperter i servere og netværk, med mange års
            erfaring i udvikling af programmer, der har kørt på lokale servere.
          </li>
          <li>
            Derudover har vi udviklet et lagerstyrings program der er baseret i
            skyen.
          </li>
        </ul>

        <div class="text">
          Derfor kan vi tilbyde ekspertviden til at udvikle dit næste program så
          det kan blive mere overskueligt for dig, at drive virksomhed.
        </div>
      </div>
    </div>
    <div class="details">
      <div class="wrapper-70">
        <p>
          Vi har håndteret systemer med langt over 1.000.000 unikke varenumre,
          hvor hvert nummer har flere anvendelsesområder. Vores erfaring spænder
          også over implementering af løsninger med omfattende billed- og
          videoressourcer, samt behov for flersproget informationer, der skal
          integreres med platforme som eBay, DBA og lignende.
        </p>
        <p>
          Desuden har vi solid erfaring med at samle eksterne databaser,
          håndtere pris- og nummeropdateringer, samt give adgang via API til
          eksterne datakilder eller muliggøre eksterne serveres adgang til vores
          kunders data. Vores brede erfaring og dygtige team gør os til den
          ideelle partner for virksomheder, der kræver avancerede IT-løsninger
          til lagerstyring.
        </p>
        <p>
          Vores løsninger er ikke kun robuste, men også skalerbare. Uanset om
          din virksomhed er lille eller stor, kan vores systemer vokse i takt
          med dine behov og tilpasses for at imødekomme dine specifikke krav.
        </p>
        <p>
          Sikkerhed er afgørende i vores tilgang til IT-løsninger. Vi
          prioriterer beskyttelsen af vores kunders data og sikrer, at alle
          behandlinger overholder de højeste standarder for sikkerhed og
          fortrolighed.
        </p>
        <p>
          Med vores ekspertise, erfaring og dedikation er vi den ideelle
          IT-partner for virksomheder, der søger avancerede løsninger til
          lagerstyring og e-handel. Lad os hjælpe dig med at optimere din
          virksomheds drift og nå dine mål.
        </p>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "ExpertSec",
};
</script>

<style scoped lang="scss">
.expert {
  width: 100%;
  margin-top: 30px;
  padding: 20px 0;
  background: linear-gradient(to right, #f4f4f4, white);
  .expert-wrapper {
    width: 65%;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-content: center;
    padding-bottom: 50px;
    @media (max-width: $tablet-width) {
      width: 85%;
    }
    @media (max-width: $mobile-width) {
      flex-wrap: wrap;
    }
    .expert-item {
      width: 49%;
      h2 {
        font-size: 50px;
        font-weight: 200;
        @media (max-width: $tablet-width) {
          font-size: 35px;
        }
        @media (max-width: $mobile-width) {
          font-size: 30px;
        }
      }

      @media (max-width: $mobile-width) {
        width: 100%;
      }
    }
  }
  .details {
    background-color: $bg-light;
    width: 100%;
    padding: 40px 0;
    .wrapper-70 {
      p {
        font-weight: 500;
        font-size: 20px;
        margin-top: 35px;
        line-height: 32px;
        @media (max-width: $mobile-width) {
          font-size: 17px;
          margin-top: 20px;
          line-height: 25px;
        }
      }
    }
  }
}
</style>
