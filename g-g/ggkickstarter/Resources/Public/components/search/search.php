<section class="ww-search" id="ww-search">
    <svg @click="toggleSearchOverlay" class="ww-search__open" xmlns="http://www.w3.org/2000/svg" width="23.938" height="23.938" viewBox="0 0 23.938 23.938"><defs></defs><path d="M20.109,18.056H19.027l-.383-.37a8.91,8.91,0,1,0-.958.958l.37.383v1.081l6.843,6.83L26.938,24.9Zm-8.212,0A6.159,6.159,0,1,1,18.056,11.9,6.151,6.151,0,0,1,11.9,18.056Z" transform="translate(-3 -3)"/></svg>
    <transition name="fade">
    <div class="ww-search__overlay" v-if="overlayActive">
        <svg @click="toggleSearchOverlay" class="ww-search__close" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        <h1 class="ww-search__headline">Was suchen Sie?</h1>
        <form class="ww-search__form">
            <input v-model="query" type="text" class="ww-search__input" placeholder="Suchbegriff eingeben (Demo: Wecryl)    ">
        </form>
        <ul class="ww-search__results" v-if="query">
            <li v-for="(result, i) in computedResults" :key="i">{{result}}</li>
        </ul>
    </div>
</transition>
</section>