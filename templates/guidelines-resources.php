<?php
/**
* Template Name: Guidelines & Resources
*
* @package WordPress
*/

get_header();

$guidelinesBlocks =get_field('guidelines_block');
$guidelinesFooter =get_field('footer_guidelines');

$resourcesBlocks =get_field('resources_block');
$resourcesFooter =get_field('footer_resources');


?>

<script>
  // get url of rest api of guidelines page
let pageGuidelinesUrl = '<?php echo site_url( '/wp-json/wp/v2/pages/25' ) ;?>'

function acfSearch() {
    return {
      // other default properties
      isLoading: false,
      isSearch: false,
      acf: null,
      guidelines: null,
      resources: null,
      searchable: [],
      search: '',

      // Fetch ACF from WP rest API
      fetchGuidelines() {
        this.isLoading = true;
        this.isSearch = false;
        this.search = '';
        fetch(pageGuidelinesUrl)
          .then(res => res.json())
          .then(data => {
            this.isLoading = false
            let returned = data.acf.guidelines_block
            this.guidelines = returned

          });
      },
      fetchResources(a = 'gui') {
        this.isLoading = true;
        this.isSearch = false;
        this.search = '';
        fetch(pageGuidelinesUrl)
          .then(res => res.json())
          .then(data => {
            this.isLoading = false
            let returned = data.acf.resources_block
            this.resources = returned

          });
      },

      filteredSearch(el = "gui") {
        this.isSearch = false;
        this.isSearch = true;

        this.isLoading = true;

        this.searchable = []

        if(el == "gui"){
          this.guidelines.forEach( guideline => {
  
        
            if(guideline.main_title.toLowerCase().includes(this.search.toLowerCase())){
              
              this.searchable.push(guideline)
              
            }else{

  
  
              if(guideline.has_download){
  
                guideline.single_download.forEach( download => {
    
                  if(download.title.toLowerCase().includes(this.search.toLowerCase()) || download.body_text.toLowerCase().includes(this.search.toLowerCase()) ){
        
                    this.searchable.push(guideline)
                   
                  }
    
                } )
              }else{
                if(guideline.text.toLowerCase().includes(this.search.toLowerCase())){
                  this.searchable.push(guideline)
                }
              }
              // Remove same object from searchable if added twice
              this.searchable =  this.searchable.reduce((acc, current) => {
                  const x = acc.find(item => item.main_title === current.main_title);
                  if (!x) {
                    return acc.concat([current]);
                  } else {
                    return acc;
                  }
              }, [])
       
            }
          })
        }else{
          this.resources.forEach( resource => {
  
         
            if(resource.main_title.toLowerCase().includes(this.search.toLowerCase())){
              
              this.searchable.push(resource)
              
            }else{

              if(resource.has_download){

                resource.single_download.forEach( download => {

                  if(download.title.toLowerCase().includes(this.search.toLowerCase()) || download.body_text.toLowerCase().includes(this.search.toLowerCase()) ){

                    this.searchable.push(resource)
                  
                  }

                } )
              }else{
                if(resource.text.toLowerCase().includes(this.search.toLowerCase())){
                  this.searchable.push(resource)
                }
              }
              // Remove same object from searchable if added twice
              this.searchable =  this.searchable.reduce((acc, current) => {
                  const x = acc.find(item => item.main_title === current.main_title);
                  if (!x) {
                    return acc.concat([current]);
                  } else {
                    return acc;
                  }
              }, [])

            }
          })
        }

        setTimeout( ()=>{this.isLoading = false} , 800)

      },

      highlightSearch(s) {
        
      if (this.search === '') return s;

      return s.replaceAll(
          new RegExp(`(${this.search.toLowerCase()})`, 'ig'),
          '<strong class="search-hightligh">$1</strong>'
      )
     
    }

    }
  }

</script>

<style>
  [x-cloak] { display: none !important; }
</style>

<main role="main" class="site-main page-guidelines">

  <div id="guidelinesTab" class="selector content-block">
    <ul>
      <li class="grSelectors s-active" data-select="guidelines" >Guidelines</li>
      <li class="grSelectors" data-select="resources" >Resources</li>
    </ul>
  </div>

  <div class="page-gr-content">
    <div x-data="acfSearch()"  class="content-block__small">

      <!-- SEARCH LOADER -->
      <div class="search-curtains"  x-show="isLoading">
        <iframe src="https://giphy.com/embed/5AtXMjjrTMwvK" width="90" height="90" frameBorder="0" class="giphy-embed" allowFullScreen></iframe>
      </div>

      <!-- GUIDELINES -->
      <section x-init="fetchGuidelines()" class="gr-content s-active" data-selector="guidelines" >
        <div class="gr-search">
          <input placeholder="Type here to search..." type="text" x-model="search">
          <button   @click="filteredSearch()" >Search</button>
          <p class="clear-gr" @click="fetchGuidelines()" x-show="isSearch" >Clear all</p>
        </div>

        <!-- IS NOT SEARCH -->
        <div 
          x-transition:enter.duration.500ms
          x-transition:leave.duration.300ms
          x-show="!isSearch" >
          <!-- START -->
          
          <template x-cloak x-for="guideline in guidelines" >
            <div class="single-gr">
   
                <h2 x-html="guideline.main_title"></h2>
    
                <template x-if="guideline.has_download">
                  <template x-for="download in guideline.single_download" >
    
                    <article class="single-download">
                      <div class="info">
                        <div>
                          <h4  x-html="download.title">/h4>
                        </div>
                        <p x-html="download.body_text"></p>
  
                      </div>
                      <a target="_blank" :href="download.download_link">DOWNLOAD NOW</a>
                    </article>
  
                  </template>
                </template>
  
                <template x-if="!guideline.has_download">
                    <div class="u-rich-text" x-html="guideline.text">
  
                    </div>
                </template>
            
  
            </div>
          </template>
  
          <!-- END -->
        </div>


        <!-- IS Search -->
        <div 
          x-transition:enter.duration.500ms
          x-transition:leave.duration.300ms
          x-show="isSearch" >
          <!-- START -->
          
          <template x-for="guideline in searchable" >
            <div class="single-gr">
   
                <h2 x-html="highlightSearch(guideline.main_title)"></h2>
    
                <template x-if="guideline.has_download">
                  <template x-for="download in guideline.single_download" >
    
                    <article class="single-download">
                      <div class="info">
                        <div>
                          <h4  x-html="highlightSearch(download.title)">/h4>
                        </div>
                        <p x-html="highlightSearch(download.body_text)"></p>
  
                      </div>
                      <a target="_blank" :href="download.download_link">DOWNLOAD NOW</a>
                    </article>
  
                  </template>
                </template>
  
                <template x-if="!guideline.has_download">
                    <div class="u-rich-text" x-html="highlightSearch(guideline.text)">
  
                    </div>
                </template>
            
  
            </div>
          </template>
  
          <!-- END -->
        </div>

        <div class="gr-footer">
          <p><?php echo $guidelinesFooter['footer_text_area'] ?></p>
          <a href="<?php echo $guidelinesFooter['link']['url'] ?>"><?php echo $guidelinesFooter['link']['title'] ?></a>
        </div>

      </section>

      <!-- RESOURCES -->
      <section  x-init="fetchResources()" class="gr-content" data-selector="resources" >
        <div class="gr-search">
          <input placeholder="Type here to search..." type="text" x-model="search">
          <button   @click="filteredSearch('res')" >Search</button>
          <p class="clear-gr" @click="fetchResources()" x-show="isSearch" >Clear all</p>
        </div>


         <!-- IS NOT SEARCH -->
         <div 
          x-transition:enter.duration.500ms
          x-transition:leave.duration.300ms
          x-show="!isSearch" >

          <!-- START -->
          <template x-cloak x-for="resource in resources" >
            <div class="single-gr">
   
                <h2 x-html="resource.main_title"></h2>
    
                <template x-if="resource.has_download">
                  <template x-for="download in resource.single_download" >
    
                    <article class="single-download">
                      <div class="info">
                        <div>
                          <h4  x-html="download.title">/h4>
                        </div>
                        <p x-html="download.body_text"></p>
  
                      </div>
                      <a target="_blank" :href="download.download_link">DOWNLOAD NOW</a>
                    </article>
  
                  </template>
                </template>
  
                <template x-if="!resource.has_download">
                    <div class="u-rich-text" x-html="resource.text">
  
                    </div>
                </template>
            
  
            </div>
          </template>
  
          <!-- END -->
        </div>


        <!-- IS Search -->
        <div 
          x-transition:enter.duration.500ms
          x-transition:leave.duration.300ms
          x-show="isSearch" >
          <!-- START -->
          
          <template x-for="guideline in searchable" >
            <div class="single-gr">
   
                <h2 x-html="highlightSearch(guideline.main_title)"></h2>
    
                <template x-if="guideline.has_download">
                  <template x-for="download in guideline.single_download" >
    
                    <article class="single-download">
                      <div class="info">
                        <div>
                          <h4  x-html="highlightSearch(download.title)">/h4>
                        </div>
                        <p x-html="highlightSearch(download.body_text)"></p>
  
                      </div>
                      <a target="_blank" :href="download.download_link">DOWNLOAD NOW</a>
                    </article>
  
                  </template>
                </template>
  
                <template x-if="!guideline.has_download">
                    <div class="u-rich-text" x-html="highlightSearch(guideline.text)">
  
                    </div>
                </template>
            
  
            </div>
          </template>
  
          <!-- END -->
        </div>
              

        <div class="gr-footer">
          <p><?php echo $resourcesFooter['footer_text_area'] ?></p>
          <a href="<?php echo $resourcesFooter['link']['url'] ?>"><?php echo $resourcesFooter['link']['title'] ?></a>
        </div>

      </section>

 

    </div>
  </div>


</main><!-- #main -->


<?php
get_footer();