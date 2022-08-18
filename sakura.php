<?php include('header.php'); ?>

<h1>Sakura Moon</h1>
<p>This is a <a href="https://discord.com" target="_blank" title="Discord - a Social Media Platform">Discord</a> robot ("bot") that I created that has a few unique systems that I did not see anywhere else. I started coding this back in 2019 and I released it to the public in late 2021.<br />If you want to read more about each system or see the commands you can use with this bot, click on each system below and more information will populate.</p>

<p>If you want, you can use <a href="#" target="_blank">this link</a> to add Sakura Moon to your server. You can also support development of the bot on <a href="#" target="_blank">Patreon</a> or by purchasing <a href="https://support.discord.com/hc/en-us/articles/360028038352-Server-Boosting-FAQ-">Discord Server Boosts</a> and boosting the <a href="#" target="_blank">Discord Server</a>.</p>

<p>All of these commands are run by either using the <code>s.</code> prefix that means you type <code>s.commandname</code> into discord and it runs the command or gives you an error message or by using the backslash <code>/</code> key on your keyboard for <a href="https://support.discord.com/hc/en-us/articles/1500000368501-Slash-Commands-FAQ" target="_blank">Slash Commands</a>.</p>

<button class="accordion">Basic Commands</button>
<div class="panel">
    <p>These are all of the commands anyone can use. I label them basic simply becaues they do not fit into any other section.</p>

    <table class="commands">
        <tr>
            <th class="first">Command Name</th>
            <th class="second">Description</th>
        </tr>
        <tr>
            <td>avatar</td>
            <td>This allows users to get links to their avatar or any other user or bot they add to the command.</td>
        </tr>
        <tr>
            <td>coinflip</td>
            <td>This allows users to flip a coin for heads or tails.</td>
        </tr>
        <tr>
            <td>userinfo</td>
            <td>This allows users to get information on themselves or others. They will be able to see information like, their status, their nickname, their username, whether the user has Discord Nitro, when they joined Discord, and more.</td>
        </tr>
        <tr>
            <td>serverinfo</td>
            <td>This allows users to see information about the server such as the <a href="https://support.discord.com/hc/en-us/articles/360028038352-Server-Boosting-FAQ-">Server Boost</a> status as well as when the server was created, how many members, who the owner is and more. This works in any server it is ran in. It cannot see information about other servers.</td>
        </tr>
        <tr>
            <td>botinfo</td>
            <td>This provides information on <strong>Sakura Moon</strong>. You can see when she (yes, I give her pronouns) was created as well as her nickname if she has one as well as links to this page where you get more information on the bot.</td>
        </tr>
    </table>

</div>

<button class="accordion">Moderation Commands</button>
<div class="panel">
    <br /><a href="https://erinskidds.com/img/discord_perms.png"  data-lightbox="dd" data-title="This is what it looks like when a user DOES have 'KICK_USERS' and 'BAN_USERS' permissions."><img id="side" src="https://erinskidds.com/img/discord_perms.png" alt="This is what it looks like when a user DOES have 'KICK_USERS' and 'BAN_USERS' permissions." /></a>
    <p>These are all of the commands "Moderators" can use. Moderators ("mods") with <em>Sakura Moon</em> are classified as users with the ability to "KICK_USERS" or "BAN_USERS". The permissions within discord, look like the image to the right, if you can't see the image, that is because you are on mobile and images are hidden on mobile.</p>
    <table class="commands">
        <tr>
            <th class="first">Command Name</th>
            <th class="second">Description</th>
        </tr>
        <tr>
            <td>warn</td>
            <td>This allows mods to warn users that are misbehaving and not following their server's rules.</td>
        </tr>
        <tr>
            <td>dm</td>
            <td>This is short for Direct Message. This allows mods to send an official message to users from the server about whatever they would like. It customizes the message depending on the server it is sent from.</td>
        </tr>
        <tr>
            <td>ban</td>
            <td>This allows mods to ban users from their server. Which means they are removed from the server and not allowed back.</td>
        </tr>
        <tr>
            <td>unban</td>
            <td>This allows mods to unban a user from their server. This allows the user back into the server if they choose. It does <em>not</em> add them back to the server however.</td>
        </tr>
        <tr>
            <td>kick</td>
            <td>This allows mods to kick a user from their server. Kicking means they knock them out of the server. The user can still come back to the server but they are removed from it.</td>
        </tr>
        <tr>
            <td>mute</td>
            <td>This allows mods to mute a user in their server. This means they cannot send messages, usually this is a temporary thing if they are spamming.</td>
        </tr>
        <tr>
            <td>unmute</td>
            <td>This allows mods to unmute a user in their server. This allows them to send messages in the server.</td>
        </tr>
    </table>
</div>

<button class="accordion">Challenge System Commands</button>
<div class="panel">
    <p>The Challenge System is a way to handle challenges in your server. This is a unique system Erin came up with to handle games in <a href="https://codinghelp.site/discord" target="_blank">CodingHelp's Discord Server</a> that she wanted to share with the world. You can make challenges, give points, remove points, and more with this system. This system took Erin the longest to code but is by far the one she gets the most enjoyment out of.</p>
    <img src="img/h1side.png" alt="arrow" id="projects">
    <h2>Moderator Commands</h2>
        <p>These are commands that only mods can use. If you want to know what I define mods as, check the <strong>Moderator Commands</strong> section above.</p>
    <table class="commands">
        <tr>
            <th class="first">Command Name</th>
            <th class="second">Description</th>
        </tr>
        <tr>
            <td>add-members</td>
            <td>This allows mods to automatically add users to the challenge system database.</td>
        </tr>
        <tr>
            <td>add</td>
            <td>This allows mods to manually add users to the challenge system database.</td>
        </tr>
        <tr>
            <td>check-participants</td>
            <td>This allows mods to see what users are enabled for the challenge system.</td>
        </tr>
        <tr>
            <td>remove-user</td>
            <td>This allows mods to remove a user from the challenge system, therefore not allowing them to participate..</td>
        </tr>
        <tr>
            <td>start-challenge</td>
            <td>This allows mods to start the challenge system and provide the first question as well as the first, second, and third place prizes.</td>
        </tr>
        <tr>
            <td>edit-challenge</td>
            <td>This allows mods to edit a challenge question that was asked. Unfortunately, this <em>cannot</em> be used on the <code>start-challenge</code> challenge question. It <em>can</em> be used on every other question.</td>
        </tr>
        <tr>
            <td>challenge</td>
            <td>This allows mods to add a new challenge question to the challenge system.</td>
        </tr>
        <tr>
            <td>reviewed</td>
            <td>This allows mods to review users submissions and assign them points.</td>
        </tr>
        <tr>
            <td>remove-points</td>
            <td>This allows mods to mark a submission as not reviewed and remove points from said submission.</td>
        </tr>
        <tr>
            <td>add-points</td>
            <td>This allows mods to add additional points to specific challenge quesitons.</td>
        </tr>
        <tr>
            <td>mod-check-submissions</td>
            <td>This allows mods to check a specific challenge quesiton to see what submissions have been and what submissions have not been reviewed.</td>
        </tr>
        <tr>
            <td>end-challenge</td>
            <td>This allows mods to end a challenge. This then spits out a leaderboard of the top 10 point earners and does not allow further submissions to the system.</td>
        </tr>
        <tr>
            <td>purge-submissions</td>
            <td>This allows mods wipe out all submissions for their guild ("server") from the challenge system's database. This also erases all questions asked during the challenge.</td>
        </tr>
    </table>
    <img src="img/h1side.png" alt="arrow" id="projects">
    <h2>User Commands</h2>
        <p>These are commands any user that is not a moderator can use.</p>
    <table class="commands">
        <tr>
            <th class="first">Command Name</th>
            <th class="second">Description</th>
        </tr>
        <tr>
            <td>submit</td>
            <td>This allows users to submit answers to the challenge system.</td>
        </tr>
        <tr>
            <td>edit-submission</td>
            <td>This allows users to edit their previous submissions to the challenge system.</td>
        </tr>
        <tr>
            <td>user-check-submissions</td>
            <td>This allows users to check to see what questions they have submitted answers to and what those answers were.</td>
        </tr>
        <tr>
            <td>challenge-leaderboard</td>
            <td>This allows users to see the top 10 people in the challenge system as well as see how they stack up and how many points they have compared to the top 10.</td>
        </tr>
    </table>
</div>

<button class="accordion">Suggestion System Commands</button>
<div class="panel">
    <p>The Suggestions System is a way to handle suggestions in your server. It allows users to make official suggestions that can be voted on by your server and then they can be updated by the user that made them or by mods that update the status.</p>
    <img src="img/h1side.png" alt="arrow" id="projects">
    <h2>Moderator Commands</h2>
        <p>These are commands that only mods can use. If you want to know what I define mods as, check the <strong>Moderator Commands</strong> section above.</p>
    <table class="commands">
        <tr>
            <th class="first">Command Name</th>
            <th class="second">Description</th>
        </tr>
        <tr>
            <td>clear-suggs</td>
            <td>This allows mods to clear out the suggestion system's database of all suggestions made to their guild ("server").</td>
        </tr>
        <tr>
            <td>completed-sugg</td>
            <td>This allows mods to mark a suggestion as completed and give an explanation of what was done. This then deletes the suggestion from the suggestions channel and database.</td>
        </tr>
        <tr>
            <td>denied-sugg</td>
            <td>This allows mods to mark a suggestion as denied and give an explanation of why. This then deletes the suggestion from the suggestions channel and database.</td>
        </tr>
        <tr>
            <td>prog-sugg</td>
            <td>This allows mods to mark a suggestion as in progress and records who ran it and what the explanation was of what is going on. This then updates the message in the suggestions channel with this information as well as removes reactions from the message.</td>
        </tr>
        <tr>
            <td>setup-sugg</td>
            <td>This allows mods to enable the suggestion system for their server. This creates a category and channel called <strong>Suggestions</strong>. It will also create a channel called <strong>Suggestions Discussions</strong>. It makes the <strong>Suggestions</strong> channel unable to be chatted in (changes the permissions ("perms") of the channel) so the <strong>Suggestions Discussions</strong> is needed so users and mods can talk about the suggestions.</td>
        </tr>
    </table>
    <img src="img/h1side.png" alt="arrow" id="projects">
    <h2>User Commands</h2>
        <p>These are commands any user that is not a moderator can use.</p>
    <table class="commands">
        <tr>
            <th class="first">Command Name</th>
            <th class="second">Description</th>
        </tr>
        <tr>
            <td>suggest</td>
            <td>This allows users to make a suggestion to the server they are in.</td>
        </tr>
        <tr>
            <td>status-sugg</td>
            <td>This allows users to check the status of a suggestion they made.</td>
        </tr>
        <tr>
            <td>edit-sugg</td>
            <td>This allows users to modify a suggestion they made previously. Only the person that made the suggestion can modify the suggestion.</td>
        </tr>
    </table>
</div>

<button class="accordion">Thanks System</button>
<div class="panel">
    <p>The Thanks System is a way to give thanks to other users that help other users out. For example, Erin has this working on <a href="https://codinghelp.site/discord/" target="_blank">CodingHelp's Discord Bot</a> where users that help other users with bugs they have in their code or questions they may ask, those users that get helped can say "Thanks" with this bot and it provides 1 point each time a user gives Thanks.</p>
    <img src="img/h1side.png" alt="arrow" id="projects">
    <h2>Moderator Commands</h2>
        <p>These are commands that only mods can use. If you want to know what I define mods as, check the <strong>Moderator Commands</strong> section above.</p>
    <table class="commands">
        <tr>
            <th class="first">Command Name</th>
            <th class="second">Description</th>
        </tr>
        <tr>
            <td>unthank</td>
            <td>This allows mods to remove a "thank" from a user in their server.</td>
        </tr>
        <tr>
            <td>clear-thanks</td>
            <td>This allows mods to completely clear out the thanks system in their server.</td>
        </tr>
        <tr>
            <td>thanks-off</td>
            <td>This allows mods to disable the thanks system in their server.</td>
        </tr>
        <tr>
            <td>thanks-on</td>
            <td>This allows mods to enable the thanks system in their server.</td>
        </tr>
    </table>
    <img src="img/h1side.png" alt="arrow" id="projects">
    <h2>User Commands</h2>
        <p>These are commands any user that is not a moderator can use.</p>
    <table class="commands">
        <tr>
            <th class="first">Command Name</th>
            <th class="second">Description</th>
        </tr>
        <tr>
            <td>thanks</td>
            <td>This allows users to give thanks to one, two, or three people at a time. At this time more than 3 people is not supported.</td>
        </tr>
        <tr>
            <td>thanks-leaderboard</td>
            <td>This allows users to see where they stand in the thanks leaderboard compared to the people in the top 10 slots.</td>
        </tr>
    </table>
</div>

<button class="accordion">Reports System</button>
<div class="panel">
    <p>The reports system is a system Erin created to be able to handle bugs that ever arose with her bot. There are bound to be bugs with anything that is ever created so Erin wanted to make sure she had a way to keep in touch with the users using her bot and fix any bugs that get reported.</p>
    <img src="img/h1side.png" alt="arrow" id="projects">
    <h2>Erin's Commands</h2>
        <p>These are commands that only Erin can use. If anyone else tries to use them it errors out and asks them to stop trying to use Erin's commands.</p>
    <table class="commands">
        <tr>
            <th class="first">Command Name</th>
            <th class="second">Description</th>
        </tr>
        <tr>
            <td>completedreport</td>
            <td>This allows Erin to mark a report as completed. It removes it from her <strong>Reports</strong> channel within Discord as well as sends a message to the user that made a report of the outcome.</td>
        </tr>
        <tr>
            <td>progress-report</td>
            <td>This allows Erin to mark a report as in-progress. It updates the message in her <strong>Reports</strong> channel within Discord as well as sends a message of the update to the user that made the report of what is going on.</td>
        </tr>
        <tr>
            <td>deniedreport</td>
            <td>This allows Erin to mark a report as denied. It removes the message from her <strong>Reports</strong> channel within Discord as well as sends a message of the denial to the user that made the report as to the reason why.</td>
        </tr>
        <tr>
            <td>reportban</td>
            <td>This allows Erin to ban a user from reporting anything with the reports system. She only does this for users that are spamming or trolling her reports system.</td>
        </tr>
        <tr>
            <td>reportbanlist</td>
            <td>This allows Erin to see a full list of when a user was banned, why, and their username.</td>
        </tr>
        <tr>
            <td>reportunban</td>
            <td>This allows Erin to unban a user from using the reports system.</td>
        </tr>
    </table>
    <img src="img/h1side.png" alt="arrow" id="projects">
    <h2>User Commands</h2>
        <p>These are commands any user that is not a moderator can use.</p>
    <table class="commands">
        <tr>
            <th class="first">Command Name</th>
            <th class="second">Description</th>
        </tr>
        <tr>
            <td>report</td>
            <td>This allows users to report issues with the bot. They can upload images that are shared to Erin as well as include text or send a report as only text.</td>
        </tr>
        <tr>
            <td>status-report</td>
            <td>This allows users to check the status of a previous report they sent in. It gives them information on how to reach Erin if they want to follow-up on a report.</td>
        </tr>
    </table>
</div>
<?php include('footer.php'); ?>