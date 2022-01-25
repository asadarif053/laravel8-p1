


  
<div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl">
<x-category-dropdown />

                    <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                         height="22" viewBox="0 0 22 22">
                        <g fill="none" fill-rule="evenodd">
                            <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                            </path>
                            <path fill="#222"
                                  d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                        </g>
                    </svg>
                </div>

                


            <script type="text/javascript">
                var catSel = document.getElementById("categoryFilter");
                catSel.addEventListener("change", function(){
                    location.href="?category="+catSel.value;
                });
            </script>
                