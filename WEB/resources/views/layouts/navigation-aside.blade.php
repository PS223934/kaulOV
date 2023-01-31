<aside class="w-56 sidenav" aria-label="Sidebar">
    <div class="overflow-y-auto sidenav-inner py-4 px-3 bg-gray-50 rounded dark:bg-gray-800">
       <ul class="space-y-2">
          <li>
             <a href="dashboard" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                <span class="ml-3">Planner</span>
             </a>
          </li>
          <li>
             <a href="/history" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                <span class="flex-1 ml-3 whitespace-nowrap">Reis Geschiedenis</span>
             </a>
          </li>

           @if(Auth::user()->hasPermissionTo(4))
               <li>
                   <a href="/roster" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                       <span class="flex-1 ml-3 whitespace-nowrap">Mijn Rooster</span>
                   </a>
               </li>
           @endif
           @if(Auth::user()->hasPermissionTo(11))
               <li>
                   <a href="/scheduler/stops" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                       <span class="flex-1 ml-3 whitespace-nowrap">Scheduler</span>
                   </a>
               </li>
           @endif
           @if(Auth::user()->hasPermissionTo(10))
               <li>
                   <a href="/app-login" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                       <span class="flex-1 ml-3 whitespace-nowrap">Desktop Login</span>
                   </a>
               </li>
           @endif
       </ul>
    </div>
 </aside>
