            </td>
		
		<td id="right_bar" valign="top">
			{if isset($is_logged_in) && isset($challenge_menu)}
			    {if $challenge_menu|@count > 0}
				<!-- Challenge Menu -->
				<div id="menuHeader" class="menubg flt">
				  <ul id="mainMenu" class="menu flt">

					{foreach from=$challenge_menu key=class_name item=class_challenges}
						<li><span class="menuTitle">WEB</span>
							<ul id="classChallenges" class="menu flt">
							{foreach from=$class_challenges item=foo}
						           {if $foo['id'] > 0 && $foo['id'] < 8 }
								<li>
									<a class="width100" href="{$site_root_path}pages/showchallenges.php?id={$foo['id']}&class_id={$foo['class_id']}">
										<span class="padding_menu">
											{$foo['title']}
										</span>
									</a>
								</li>
							    {/if}
							{/foreach}
							</ul>
						</li>
					{/foreach}
					</ul>
				</div>
			    {/if}
			{else}
                            {include file="user_login.tpl"}
                        {/if}
					
                    </td>
<!-- 2nd starts from here -->
		{if isset($is_logged_in) && isset($challenge_menu)}
		<td id="right_bar" valign="top">
			{if isset($is_logged_in) && isset($challenge_menu)}
			    {if $challenge_menu|@count > 0}
				<!-- Challenge Menu -->
				<div id="menuHeader" class="menubg flt">
				  <ul id="mainMenu" class="menu flt">

					{foreach from=$challenge_menu key=class_name item=class_challenges}
						<li><span class="menuTitle">CRYPTOGRAPHY</span>
							<ul id="classChallenges" class="menu flt">
							{foreach from=$class_challenges item=foo}
							      {if $foo['id'] > 7 && $foo['id'] < 14 }
								<li>
									<a class="width100" href="{$site_root_path}pages/showchallenges.php?id={$foo['id']}&class_id={$foo['class_id']}">
										<span class="padding_menu">
											{$foo['title']}
										</span>
									</a>
								</li>
								{/if}
							{/foreach}
							</ul>
						</li>
					{/foreach}
					</ul>
				</div>
			    {/if}
			{else}
                            {include file="user_login.tpl"}
                        {/if}
                    </td>
		{/if}

<!-3rd starts here..>

{if isset($is_logged_in) && isset($challenge_menu)}
		<td id="right_bar" valign="top">
			{if isset($is_logged_in) && isset($challenge_menu)}
			    {if $challenge_menu|@count > 0}
				<!-- Challenge Menu -->
				<div id="menuHeader" class="menubg flt">
				  <ul id="mainMenu" class="menu flt">

					{foreach from=$challenge_menu key=class_name item=class_challenges}
						<li><span class="menuTitle">Forensics</span>
							<ul id="classChallenges" class="menu flt">
							{foreach from=$class_challenges item=foo}
							      {if $foo['id'] > 13 && $foo['id'] < 20 }
								<li>
									<a class="width100" href="{$site_root_path}pages/showchallenges.php?id={$foo['id']}&class_id={$foo['class_id']}">
										<span class="padding_menu">
											{$foo['title']}
										</span>
									</a>
								</li>
								{/if}
							{/foreach}
							</ul>
						</li>
					{/foreach}
					</ul>
				</div>
			    {/if}
			{else}
                            {include file="user_login.tpl"}
                        {/if}
                    </td>
		{/if}








<!-- 4rd starts from here-->
		{if isset($is_logged_in) && isset($challenge_menu)}
		<td id="right_bar" valign="top" >
			{if isset($is_logged_in) && isset($challenge_menu)}
			    {if $challenge_menu|@count > 0}
				<!-- Challenge Menu -->
				<div id="menuHeader" class="menubg flt">
				  <ul id="mainMenu" class="menu flt">

					{foreach from=$challenge_menu key=class_name item=class_challenges}
						<li><span class="menuTitle">TRIVIA</span>
							<ul id="classChallenges" class="menu flt">
							{foreach from=$class_challenges item=foo}
							      {if $foo['id'] > 19 && $foo['id'] < 25 }
								<li>
									<a class="width100" href="{$site_root_path}pages/showchallenges.php?id={$foo['id']}&class_id={$foo['class_id']}">
										<span class="padding_menu">
											{$foo['title']}
										</span>
									</a>
								</li>
								{/if}
							{/foreach}
							</ul>
						</li>
					{/foreach}
					</ul>
				</div>
			    {/if}
			{else}
                            {include file="user_login.tpl"}
                        {/if}
                    </td>
		{/if}
<!--4th starts from here-->
		{if isset($is_logged_in) && isset($challenge_menu)}
		<td id="right_bar" valign="top" >
			{if isset($is_logged_in) && isset($challenge_menu)}
			    {if $challenge_menu|@count > 0}
				<!-- Challenge Menu -->
				<div id="menuHeader" class="menubg flt">
				  <ul id="mainMenu" class="menu flt">

					{foreach from=$challenge_menu key=class_name item=class_challenges}
						<li><span class="menuTitle">MISC.</span>
							<ul id="classChallenges" class="menu flt">
							{foreach from=$class_challenges item=foo}
                                                              {if $foo['id'] > 24 && $foo['id'] < 40 }

								<li>
									<a class="width100" href="{$site_root_path}pages/showchallenges.php?id={$foo['id']}&class_id={$foo['class_id']}">
										<span class="padding_menu">
											{$foo['title']}
										</span>
									</a>
								</li>
								{/if}
							{/foreach}
							</ul>
						</li>
					{/foreach}
					</ul>
				</div>
			    {/if}
			{else}
                            {include file="user_login.tpl"}
                        {/if}
                    </td>
		{/if}
	
                </tr>
            </table>
        </div>
    </body>
</html>
