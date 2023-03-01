<?php

namespace Database\Seeders\Badaso\PostyTheme\ManualGenerate;

use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Uasoft\Badaso\Models\User;
use Uasoft\Badaso\Module\Post\Models\Post;

class BadasoPostsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @throws Exception
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();

        try {
            $user = User::whereHas('roles', function (Builder $query) {
                return $query->where('name', 'administrator');
            })->first();

            $posts = ([
                0 => [
                    'id'               => 1,
                    'user_id'          => $user->id,
                    'parent_id'        => null,
                    'category_id'      => 6,
                    'title'            => 'Top 10 System Design Interview Questions',
                    'slug'             => 'top-10-system-design-interview-questions',
                    'meta_title'       => null,
                    'meta_description' => null,
                    'summary'          => null,
                    'content'          => '<article>
<section>
<p id="7d94" data-selectable-paragraph="">Originally written by Educative co-founder, Fahim ul Haq</p>
<p id="6b30" data-selectable-paragraph="">Over my 10 years as a senior software engineer and interviewer at Microsoft and Facebook, I&rsquo;ve worked with&nbsp;hundreds of applicants&nbsp;as they solve different system design problems.</p>
<p id="a921" data-selectable-paragraph="">Developers tend to struggle with SDI questions because they are so open ended and often require a kind of critical thinking not practiced in other coding interview challenges.</p>
<p id="668f" data-selectable-paragraph="">While SDI questions change over time, some have remained popular in interviews across various top companies.</p>
<p id="9dc0" data-selectable-paragraph="">Today, we&rsquo;ll explore the&nbsp;top 10&nbsp;most commonly asked system design interview questions, common problems you&rsquo;ll have to address in each, and some tools to help you do that.</p>
<p id="c378" data-selectable-paragraph="">Here&rsquo;s what we&rsquo;ll cover today:</p>
<ul>
<li id="3aba" data-selectable-paragraph="">Tips for any question</li>
<li id="a918" data-selectable-paragraph="">1. Design a chat service</li>
<li id="a8de" data-selectable-paragraph="">2. Design a ride-sharing service</li>
<li id="558b" data-selectable-paragraph="">3. Design a URL shortening service</li>
<li id="6b04" data-selectable-paragraph="">4. Design a social media service</li>
<li id="9a2e" data-selectable-paragraph="">5. Design a social message board</li>
<li id="8a7c" data-selectable-paragraph="">6. Design a file storage service</li>
<li id="c7ee" data-selectable-paragraph="">7. Design a video streaming service</li>
<li id="1e6d" data-selectable-paragraph="">8. Design an API Rate Limiter</li>
<li id="41ab" data-selectable-paragraph="">9. Design a proximity server</li>
<li id="3e4d" data-selectable-paragraph="">10. Design a Type-Ahead service</li>
<li id="d55f" data-selectable-paragraph="">What to learn next</li>
</ul>
<h1 id="342d" data-selectable-paragraph="">Tips for any SDI Question</h1>
<ul>
<li id="366f" data-selectable-paragraph="">Start each problem by stating what you know: List all required features of the system, common problems you expect to encounter with this sort of system, and the traffic you expect the system to handle. The listing process lets the interviewer see your planning skills and correct any possible misunderstandings before you begin the solution.</li>
<li id="22d9" data-selectable-paragraph="">Narrate any trade-offs: Every system design choice matters. At each decision point, list at least one positive and negative effect of that choice.</li>
<li id="e0c8" data-selectable-paragraph="">Ask your interviewer to clarify: Most system design questions are purposefully vague. Ask clarifying questions to show the interviewer how you&rsquo;re viewing the question and your knowledge of the system&rsquo;s needs.</li>
<li id="842e" data-selectable-paragraph="">Discuss emerging technologies: Conclude each question with an overview of how and where the system could benefit from&nbsp;machine learning. This will demonstrate that you&rsquo;re not just prepared for current solutions but future solutions as well.</li>
</ul>
<figure>
<div tabindex="0" role="button"><img role="presentation" src="https://miro.medium.com/max/700/1*2tl_w_LvUCb2iWxOsv3SIw.png" sizes="700px" srcset="https://miro.medium.com/max/276/1*2tl_w_LvUCb2iWxOsv3SIw.png 276w, https://miro.medium.com/max/552/1*2tl_w_LvUCb2iWxOsv3SIw.png 552w, https://miro.medium.com/max/640/1*2tl_w_LvUCb2iWxOsv3SIw.png 640w, https://miro.medium.com/max/700/1*2tl_w_LvUCb2iWxOsv3SIw.png 700w" alt="" width="700" height="350" /></div>
<figcaption data-selectable-paragraph="">Image Source: Author</figcaption>
</figure>
<h1 id="124b" data-selectable-paragraph="">1. Design a global chat service like Facebook Messenger or WhatsApp</h1>
<p id="caae" data-selectable-paragraph="">For this question, you&rsquo;ll design a service that allows users to chat with each other over the internet. Conversations can be one-on-one or can be group chats with many members. Messages should only be accessible by those included in the conversation.</p>
<h2 id="9a0c" data-selectable-paragraph="">Required Features</h2>
<ul>
<li id="6471" data-selectable-paragraph="">Messages must be sent and received via the internet.</li>
<li id="ad42" data-selectable-paragraph="">Service must support one-on-one and group chats.</li>
<li id="4da5" data-selectable-paragraph="">Messages should be stored for later viewing.</li>
<li id="0551" data-selectable-paragraph="">Users should be able to send pictures and videos as well as text messages.</li>
<li id="a030" data-selectable-paragraph="">Messages should be encrypted during transit.</li>
<li id="b49d" data-selectable-paragraph="">Messages should be visible with minimal latency.</li>
</ul>
<h2 id="3c8f" data-selectable-paragraph="">Common Problems</h2>
<ul>
<li id="ec66" data-selectable-paragraph="">What happens if a message is sent without an internet connection? Is it sent when the connection is restored?</li>
<li id="d5f5" data-selectable-paragraph="">How will you encrypt and decrypt the message without increasing latency?</li>
<li id="2bdb" data-selectable-paragraph="">How do users receive notifications?</li>
<li id="ee54" data-selectable-paragraph="">Are messages pulled from the device (server periodically prompts the devices if they&rsquo;re waiting to send a message) or are pushed to the server (device prompts the server that it has a message to send)?</li>
</ul>
<h2 id="241b" data-selectable-paragraph="">Tools to Consider</h2>
<ul>
<li id="6b0d" data-selectable-paragraph="">Split the database schema into multiple tables: user table (with the user ID and contacts), a chat table (with chat IDs and a list of participating user IDs), and message table (with past messages a reference to the chat ID).</li>
<li id="0849" data-selectable-paragraph="">Use WebSocket for bi-directional connections between device and server.</li>
<li id="2d56" data-selectable-paragraph="">Use Push notifications to notify members even if they&rsquo;re offline.</li>
</ul>
<figure>
<div tabindex="0" role="button"><img role="presentation" src="https://miro.medium.com/max/700/1*aSJLuUuE7wXHQFwWbDUIAg.png" sizes="700px" srcset="https://miro.medium.com/max/276/1*aSJLuUuE7wXHQFwWbDUIAg.png 276w, https://miro.medium.com/max/552/1*aSJLuUuE7wXHQFwWbDUIAg.png 552w, https://miro.medium.com/max/640/1*aSJLuUuE7wXHQFwWbDUIAg.png 640w, https://miro.medium.com/max/700/1*aSJLuUuE7wXHQFwWbDUIAg.png 700w" alt="" width="700" height="350" /></div>
<figcaption data-selectable-paragraph="">Image Source: Author</figcaption>
</figure>
<h1 id="5481" data-selectable-paragraph="">2. Design a ride-sharing service like Uber or Lyft</h1>
<p id="fd2d" data-selectable-paragraph="">This question asks you to create a ride-sharing service that matches users with nearby drivers. Users can input a destination and transmit their current location and nearby drivers are notified within seconds.</p>
<p id="e5ad" data-selectable-paragraph="">The app then tracks a route between the driver and user&rsquo;s current locations, then from the user&rsquo;s location to the destination.</p>
<h2 id="0df5" data-selectable-paragraph="">Required Features</h2>
<ul>
<li id="9f07" data-selectable-paragraph="">The system must track the current location of all users and drivers.</li>
<li id="b46a" data-selectable-paragraph="">Users and drivers must receive updated trip information while in transit.</li>
<li id="b547" data-selectable-paragraph="">Must support thousands of users at various points in the process and scale accordingly.</li>
<li id="3596" data-selectable-paragraph="">Both driver and user must be constantly connected to the server.</li>
</ul>
<h2 id="5d97" data-selectable-paragraph="">Common Problems</h2>
<ul>
<li id="240b" data-selectable-paragraph="">How can you keep latency low during busy periods?</li>
<li id="bf61" data-selectable-paragraph="">How is the driver paired with the user? Iterating all drivers to find Euclidean distance would be inefficient.</li>
<li id="ce9d" data-selectable-paragraph="">What happens if the driver or user loses connection?</li>
<li id="61e8" data-selectable-paragraph="">How do you store all cached location data?</li>
</ul>
<h2 id="1e95" data-selectable-paragraph="">Tools to Consider</h2>
<ul>
<li id="fb37" data-selectable-paragraph="">Use the S2Geometry library to split locations into cells. Only calculate driver distance with drivers in the same cell as the user.</li>
<li id="e2cf" data-selectable-paragraph="">Use distributed storage to store locations of all users, location data will only be roughly 1Kb per user.</li>
<li id="9007" data-selectable-paragraph="">If location data halts, the device continues to report their previous location while waiting for reconnection.</li>
<li id="bb1e" data-selectable-paragraph="">Allow a buffer after prompting the closest driver to take a trip. If they refuse, move to the next driver.</li>
</ul>
<figure>
<div tabindex="0" role="button"><img role="presentation" src="https://miro.medium.com/max/700/1*-WYGwFdIVAp4T_3v3jugHQ.png" sizes="700px" srcset="https://miro.medium.com/max/276/1*-WYGwFdIVAp4T_3v3jugHQ.png 276w, https://miro.medium.com/max/552/1*-WYGwFdIVAp4T_3v3jugHQ.png 552w, https://miro.medium.com/max/640/1*-WYGwFdIVAp4T_3v3jugHQ.png 640w, https://miro.medium.com/max/700/1*-WYGwFdIVAp4T_3v3jugHQ.png 700w" alt="" width="700" height="350" /></div>
<figcaption data-selectable-paragraph="">Image Source: Author</figcaption>
</figure>
<h1 id="dc37" data-selectable-paragraph="">3. Design a URL shortening service like TinyURL or&nbsp;bit.ly</h1>
<p id="0af7" data-selectable-paragraph="">This question asks you to create a program that shortens long URLs like TinyURL or&nbsp;bit.ly. These programs take a long URL and generate a new and unique short URL. They can also intake a shortened URL and return the original full-length URL.</p>
<h2 id="62dd" data-selectable-paragraph="">Required Features</h2>
<ul>
<li id="3b71" data-selectable-paragraph="">Returns a URL that is shorter than the original</li>
<li id="3732" data-selectable-paragraph="">Must store the original URL</li>
<li id="506e" data-selectable-paragraph="">Newly generated URL must be able to link to the stored original</li>
<li id="a682" data-selectable-paragraph="">Shortened URL should allow redirects</li>
<li id="54a6" data-selectable-paragraph="">Must support custom short URLs</li>
<li id="8c37" data-selectable-paragraph="">Must support many requests at once</li>
</ul>
<h2 id="d27b" data-selectable-paragraph="">Common Problems</h2>
<ul>
<li id="af24" data-selectable-paragraph="">What if two users input the same custom URL?</li>
<li id="6869" data-selectable-paragraph="">What if there are more users than expected?</li>
<li id="d90a" data-selectable-paragraph="">How does the database regulate storage space?</li>
</ul>
<h2 id="856c" data-selectable-paragraph="">Tools to Consider</h2>
<ul>
<li id="71a9" data-selectable-paragraph="">Use hashing to link original and new URLs</li>
<li id="191d" data-selectable-paragraph="">Use REST API to load balance high traffic and handle front-end client communication</li>
<li id="ef07" data-selectable-paragraph="">Use multithreading to handle multiple requests at once</li>
<li id="a845" data-selectable-paragraph="">Use NoSQL database to store original URLs (no relation between stored URLs)</li>
</ul>
<figure>
<div tabindex="0" role="button"><img role="presentation" src="https://miro.medium.com/max/700/1*Db0Mzs8pbiOUgVE8bP32vw.png" sizes="700px" srcset="https://miro.medium.com/max/276/1*Db0Mzs8pbiOUgVE8bP32vw.png 276w, https://miro.medium.com/max/552/1*Db0Mzs8pbiOUgVE8bP32vw.png 552w, https://miro.medium.com/max/640/1*Db0Mzs8pbiOUgVE8bP32vw.png 640w, https://miro.medium.com/max/700/1*Db0Mzs8pbiOUgVE8bP32vw.png 700w" alt="" width="700" height="350" /></div>
<figcaption data-selectable-paragraph="">Image Source: Author</figcaption>
</figure>
<h1 id="b49c" data-selectable-paragraph="">4. Design a mass social media service like Facebook, Twitter, or Instagram</h1>
<p id="65c4" data-selectable-paragraph="">For this question, you&rsquo;ll design a social media service used by my hundred thousand users like Instagram. Users should be able to view a newsfeed with posts by followed users and suggest new content the user may like.</p>
<p id="3069" data-selectable-paragraph="">Interviewers often want to hear you discuss the newsfeed in depth.</p>
<h2 id="e094" data-selectable-paragraph="">Required Features</h2>
<ul>
<li id="8e87" data-selectable-paragraph="">Robust newsfeed and recommendation system</li>
<li id="7111" data-selectable-paragraph="">Users can make public posts</li>
<li id="c353" data-selectable-paragraph="">Other users can comment or like posts</li>
<li id="6708" data-selectable-paragraph="">Must comfortably accommodate many users at once</li>
<li id="b3ab" data-selectable-paragraph="">System must be highly available</li>
</ul>
<h2 id="b76c" data-selectable-paragraph="">Common Problems</h2>
<ul>
<li id="663f" data-selectable-paragraph="">Famous users will have millions of followers, how are they handled vs standard users?</li>
<li id="f700" data-selectable-paragraph="">How does the system weight posts by age? Old posts are less likely to be viewed than new posts.</li>
<li id="43aa" data-selectable-paragraph="">What&rsquo;s the ratio of&nbsp;read&nbsp;and&nbsp;write&nbsp;focused nodes? Are there likely to be more read requests (users viewing posts) or write requests (users creating posts)?</li>
<li id="ca15" data-selectable-paragraph="">How can you increase availability? How does the system update? What happens if a node fails?</li>
<li id="3d8a" data-selectable-paragraph="">How do you efficiently store posts and images?</li>
</ul>
<h2 id="0cc7" data-selectable-paragraph="">Tools to Consider</h2>
<ul>
<li id="b219" data-selectable-paragraph="">Use rolling updates and replica nodes to maximize availability.</li>
<li id="8c82" data-selectable-paragraph="">Use a trained machine learning algorithm to recommend posts.</li>
<li id="2f04" data-selectable-paragraph="">Create a database schema that stores celebrities and users separately.</li>
<li id="0ae2" data-selectable-paragraph="">Use a social graph to further track following habits</li>
</ul>
<figure>
<div tabindex="0" role="button"><img role="presentation" src="https://miro.medium.com/max/700/1*phS9DhxHwQhcSl7Vu8NLCw.png" sizes="700px" srcset="https://miro.medium.com/max/276/1*phS9DhxHwQhcSl7Vu8NLCw.png 276w, https://miro.medium.com/max/552/1*phS9DhxHwQhcSl7Vu8NLCw.png 552w, https://miro.medium.com/max/640/1*phS9DhxHwQhcSl7Vu8NLCw.png 640w, https://miro.medium.com/max/700/1*phS9DhxHwQhcSl7Vu8NLCw.png 700w" alt="" width="700" height="350" /></div>
<figcaption data-selectable-paragraph="">Image Source: Author</figcaption>
</figure>
<h1 id="569c" data-selectable-paragraph="">5. Design a social network and message board service like Quora, Reddit, or HackerNews</h1>
<p id="9680" data-selectable-paragraph="">For this question, you&rsquo;ll design a forum-like system where users can post questions and links.</p>
<p id="55b7" data-selectable-paragraph="">Other users can view and comment on the questions. Questions have tags that represent their topic and users can follow tags to see questions on specific topics. Users have a newsfeed that highlights popular questions from their followed tags and related topics.</p>
<h2 id="2168" data-selectable-paragraph="">Required Features</h2>
<ul>
<li id="d2b1" data-selectable-paragraph="">Users must be able to create public posts and apply tags</li>
<li id="f58a" data-selectable-paragraph="">Posts must be sortable by tag</li>
<li id="cc57" data-selectable-paragraph="">Other users must be able to post comments in real-time.</li>
<li id="4b4f" data-selectable-paragraph="">The database must store data on each post (views, upvotes, etc.)</li>
<li id="45bb" data-selectable-paragraph="">The newsfeed must display posts from followed tags AND posts from other tags that the user will like.</li>
<li id="4800" data-selectable-paragraph="">Must support high traffic of viewers and new posts.</li>
</ul>
<h2 id="3d38" data-selectable-paragraph="">Common Problems</h2>
<ul>
<li id="d9c5" data-selectable-paragraph="">Does our product only need to work on the web?</li>
<li id="15d7" data-selectable-paragraph="">Where are user uploaded images/links stored?</li>
<li id="f226" data-selectable-paragraph="">How will the system determine related tags? How many posts from unfollowed tags are shown in the feed?</li>
<li id="1a94" data-selectable-paragraph="">How are posts distributed across a network of servers?</li>
</ul>
<h2 id="6325" data-selectable-paragraph="">Tools to Consider</h2>
<ul>
<li id="07f8" data-selectable-paragraph="">Use an SQL database to map the relational data (users have posts, posts have comments/likes, categories have related posts, etc.)</li>
<li id="b41a" data-selectable-paragraph="">Use multithreading and a load balancer layer to help support higher traffic.</li>
<li id="f09c" data-selectable-paragraph="">Use sharding to break up the system. Consider sharding by category to store posts of the same tags in one machine.</li>
<li id="390f" data-selectable-paragraph="">Use Machine Learning and Natural Language Processing to find correlations between the relationships between tags</li>
</ul>
<figure>
<div tabindex="0" role="button"><img role="presentation" src="https://miro.medium.com/max/700/1*Cy6kQdHDU3x-aD2ETMUwFw.png" sizes="700px" srcset="https://miro.medium.com/max/276/1*Cy6kQdHDU3x-aD2ETMUwFw.png 276w, https://miro.medium.com/max/552/1*Cy6kQdHDU3x-aD2ETMUwFw.png 552w, https://miro.medium.com/max/640/1*Cy6kQdHDU3x-aD2ETMUwFw.png 640w, https://miro.medium.com/max/700/1*Cy6kQdHDU3x-aD2ETMUwFw.png 700w" alt="" width="700" height="350" /></div>
<figcaption data-selectable-paragraph="">Image Source: Author</figcaption>
</figure>
<h1 id="8a3a" data-selectable-paragraph="">6. Design a global file storage &amp; sharing service like Dropbox, Google Drive, or Google Photos</h1>
<p id="e75f" data-selectable-paragraph="">For this question, you&rsquo;ll create a synchronous, cross-platform storage system like Dropbox. Users can store files and photos and access them from other devices.</p>
<h2 id="5d80" data-selectable-paragraph="">Required Features</h2>
<ul>
<li id="72f8" data-selectable-paragraph="">Users should be able to save/delete/update/share files over the web</li>
<li id="28fd" data-selectable-paragraph="">Old versions of documents should be saved to rollback</li>
<li id="40a0" data-selectable-paragraph="">Files updates should sync across multiple devices</li>
</ul>
<h2 id="1084" data-selectable-paragraph="">Common Problems</h2>
<ul>
<li id="cf71" data-selectable-paragraph="">Where are the files stored?</li>
<li id="7cb1" data-selectable-paragraph="">How do you handle updates? Do you re-upload the entire file again?</li>
<li id="ac34" data-selectable-paragraph="">Do small updates require a full file update?</li>
<li id="f455" data-selectable-paragraph="">How does the system handle two users updating a document at the same time?</li>
</ul>
<h2 id="9ca1" data-selectable-paragraph="">Tools to Consider</h2>
<ul>
<li id="81b4" data-selectable-paragraph="">Use chunking to split files into multiple sections. Updates only re-upload the section rather than the whole file.</li>
<li id="ed07" data-selectable-paragraph="">Use cloud storage like Amazon S3 to handle the internal database.</li>
<li id="5421" data-selectable-paragraph="">Make the client constantly check with the server to ensure concurrent updates are applied.</li>
</ul>
<figure>
<div tabindex="0" role="button"><img role="presentation" src="https://miro.medium.com/max/700/1*sSu1XnIYcccj3aAj8zMd7g.png" sizes="700px" srcset="https://miro.medium.com/max/276/1*sSu1XnIYcccj3aAj8zMd7g.png 276w, https://miro.medium.com/max/552/1*sSu1XnIYcccj3aAj8zMd7g.png 552w, https://miro.medium.com/max/640/1*sSu1XnIYcccj3aAj8zMd7g.png 640w, https://miro.medium.com/max/700/1*sSu1XnIYcccj3aAj8zMd7g.png 700w" alt="" width="700" height="350" /></div>
<figcaption data-selectable-paragraph="">Image Source: Author</figcaption>
</figure>
<h1 id="eacb" data-selectable-paragraph="">7. Design a global video streaming service like YouTube or Netflix</h1>
<p id="bfba" data-selectable-paragraph="">This question asks you to create an online video streaming service like YouTube. The service will store and transmit hundreds of petabytes of video data. It must also store statistics (views, likes, number of views, etc.) and allow for users to post comments.</p>
<p id="6704" data-selectable-paragraph="">Your solution must be scalable to support thousands of concurrent users.</p>
<h2 id="09fb" data-selectable-paragraph="">Required Features</h2>
<ul>
<li id="8822" data-selectable-paragraph="">Videos should be uploadable over the web</li>
<li id="ea50" data-selectable-paragraph="">Users should receive an uninterrupted stream over the internet</li>
<li id="5ff1" data-selectable-paragraph="">Video statistics should be stored and accessible for every video.</li>
<li id="8ffc" data-selectable-paragraph="">Comments must be saved and displayed with the video to other comments</li>
<li id="af3d" data-selectable-paragraph="">Should support high traffic of several thousand users</li>
</ul>
<h2 id="2e35" data-selectable-paragraph="">Common Problems</h2>
<ul>
<li id="5491" data-selectable-paragraph="">How will your service ensure smooth video streaming on various internet qualities?</li>
<li id="1ad0" data-selectable-paragraph="">How does your service respond to a sudden drop in streaming speed (buffering, reduced quality, etc.)?</li>
<li id="2fcf" data-selectable-paragraph="">How are the videos stored?</li>
</ul>
<h2 id="9fff" data-selectable-paragraph="">Tools to Consider</h2>
<ul>
<li id="7338" data-selectable-paragraph="">Use cloud technology to store and transmit video data.</li>
<li id="a415" data-selectable-paragraph="">Use Machine Learning to suggest new video content.</li>
<li id="3993" data-selectable-paragraph="">Prevent stuttering for inconsistent connections with a delay. The user views data from a few moments ago rather than as it comes in.</li>
</ul>
<figure>
<div tabindex="0" role="button"><img role="presentation" src="https://miro.medium.com/max/700/1*IFrZucRqfGYbOehRDUKO_w.png" sizes="700px" srcset="https://miro.medium.com/max/276/1*IFrZucRqfGYbOehRDUKO_w.png 276w, https://miro.medium.com/max/552/1*IFrZucRqfGYbOehRDUKO_w.png 552w, https://miro.medium.com/max/640/1*IFrZucRqfGYbOehRDUKO_w.png 640w, https://miro.medium.com/max/700/1*IFrZucRqfGYbOehRDUKO_w.png 700w" alt="" width="700" height="350" /></div>
<figcaption data-selectable-paragraph="">Image Source: Author</figcaption>
</figure>
<h1 id="7860" data-selectable-paragraph="">8. Design an API Rate Limiter for sites like Firebase or Github</h1>
<p id="df04" data-selectable-paragraph="">For this question, you&rsquo;ll create an API Rate Limiter that limits the number of API calls a service can receive in a given time period to avoid an overload.</p>
<p id="35e5" data-selectable-paragraph="">The interviewer can ask for this at various scales, from a single machine to an entire distributed network.</p>
<h2 id="426c" data-selectable-paragraph="">Required Features</h2>
<ul>
<li id="37f1" data-selectable-paragraph="">Devices are limited to 10 requests per hour</li>
<li id="a2dd" data-selectable-paragraph="">The Limiter must notify the user if their request is blocked.</li>
<li id="7aad" data-selectable-paragraph="">Must handle traffic suitable to its scale.</li>
</ul>
<h2 id="1e50" data-selectable-paragraph="">Common Problems</h2>
<ul>
<li id="468d" data-selectable-paragraph="">How does your system measure requests per hour? If a user makes 10 requests at 1:20 then another 10 at 2:10, they&rsquo;ve made 20 in the same 1-hour window despite the hour change.</li>
<li id="377f" data-selectable-paragraph="">How would designing for a distributed system differ from a local system?</li>
</ul>
<h2 id="6f3b" data-selectable-paragraph="">Tools to Consider</h2>
<ul>
<li id="cf12" data-selectable-paragraph="">Use sliding time windows to avoid hourly resets.</li>
<li id="e345" data-selectable-paragraph="">Save a counter integer instead of the request itself to save space.</li>
</ul>
<figure>
<div tabindex="0" role="button"><img role="presentation" src="https://miro.medium.com/max/700/1*Bpkrnu4vkgVraVJ1q6d-jQ.png" sizes="700px" srcset="https://miro.medium.com/max/276/1*Bpkrnu4vkgVraVJ1q6d-jQ.png 276w, https://miro.medium.com/max/552/1*Bpkrnu4vkgVraVJ1q6d-jQ.png 552w, https://miro.medium.com/max/640/1*Bpkrnu4vkgVraVJ1q6d-jQ.png 640w, https://miro.medium.com/max/700/1*Bpkrnu4vkgVraVJ1q6d-jQ.png 700w" alt="" width="700" height="350" /></div>
<figcaption data-selectable-paragraph="">Image Source: Author</figcaption>
</figure>
<h1 id="67eb" data-selectable-paragraph="">9. Design a proximity server like Yelp or Nearby Places/Friends</h1>
<p id="f9b2" data-selectable-paragraph="">For this final question, you&rsquo;ll design a proximity server that stores and reports the distance to places like restaurants. Users can search nearby places by distance or popularity. The database must store data for 500 million places across the globe but have low latency.</p>
<h2 id="fbb1" data-selectable-paragraph="">Required Features</h2>
<ul>
<li id="2456" data-selectable-paragraph="">Store up to 500 million locations.</li>
<li id="7b12" data-selectable-paragraph="">Locations must be uniquely identified and have corresponding data like a quality review and hours of service.</li>
<li id="9b5e" data-selectable-paragraph="">Searches must return results with minimal latency.</li>
<li id="a529" data-selectable-paragraph="">Users must be able to search results by distance or quality.</li>
</ul>
<h2 id="f6ad" data-selectable-paragraph="">Common Problems</h2>
<ul>
<li id="331c" data-selectable-paragraph="">How do you store so much location data?</li>
<li id="0fa4" data-selectable-paragraph="">How do you achieve quick search results?</li>
<li id="de75" data-selectable-paragraph="">How does your system handle different population densities? Rigid latitude/longitude grids will cause varied responsiveness based on density.</li>
<li id="022c" data-selectable-paragraph="">How can we optimize commonly searched locations?</li>
</ul>
<h2 id="3432" data-selectable-paragraph="">Tools to Consider</h2>
<ul>
<li id="5472" data-selectable-paragraph="">Use a relational database to store the list of locations and related data.</li>
<li id="affe" data-selectable-paragraph="">Use caching to store data for the most popular locations.</li>
<li id="6965" data-selectable-paragraph="">Use sharding to split data by region.</li>
<li id="cc9a" data-selectable-paragraph="">Search locations within a certain dynamic grid. If there are more than 500 locations in a single cell, split the grid into 4 smaller cells. Repeat until you only have to search less than 500 locations.</li>
</ul>
<figure>
<div tabindex="0" role="button"><img role="presentation" src="https://miro.medium.com/max/700/1*8lDOe6Y3cQvwJTCG9Ds4ww.png" sizes="700px" srcset="https://miro.medium.com/max/276/1*8lDOe6Y3cQvwJTCG9Ds4ww.png 276w, https://miro.medium.com/max/552/1*8lDOe6Y3cQvwJTCG9Ds4ww.png 552w, https://miro.medium.com/max/640/1*8lDOe6Y3cQvwJTCG9Ds4ww.png 640w, https://miro.medium.com/max/700/1*8lDOe6Y3cQvwJTCG9Ds4ww.png 700w" alt="" width="700" height="350" /></div>
<figcaption data-selectable-paragraph="">Image Source: Author</figcaption>
</figure>
<h1 id="7a8b" data-selectable-paragraph="">10. Design a search engine related service like Type-Ahead</h1>
<p id="6b86" data-selectable-paragraph="">This service will partially complete search queries and display 5 suggestions to complete the query. It should adapt to highly searched content in real-time and suggest that to other users.</p>
<p id="134d" data-selectable-paragraph="">For example, &ldquo;Seahawks win the Super Bowl&rdquo; would be suggested within minutes of the event occurring.</p>
<h2 id="62cc" data-selectable-paragraph="">Required Features</h2>
<ul>
<li id="a706" data-selectable-paragraph="">The service should match partial queries with popular queries.</li>
<li id="1257" data-selectable-paragraph="">Minor spelling mistakes should be corrected, i.e. &ldquo;dgo &rarr; dog&rdquo;</li>
<li id="8f50" data-selectable-paragraph="">Should guess the 5 most likely options based on the query</li>
<li id="9f1e" data-selectable-paragraph="">Results should update as the query is being written</li>
</ul>
<h2 id="8709" data-selectable-paragraph="">Common Problems</h2>
<ul>
<li id="43a7" data-selectable-paragraph="">How strong do you make the spelling mistake corrections?</li>
<li id="a996" data-selectable-paragraph="">How do you update selections without causing latency?</li>
<li id="0448" data-selectable-paragraph="">How do you determine the most likely completed query? Does it adapt to the user&rsquo;s searches?</li>
<li id="1b54" data-selectable-paragraph="">What happens if the user types very quickly? Do suggestions only appear after they&rsquo;re done?</li>
</ul>
<h2 id="a308" data-selectable-paragraph="">Tools to Consider</h2>
<ul>
<li id="2765" data-selectable-paragraph="">Use a natural language processing machine learning algorithm to anticipate the next characters.</li>
<li id="6eb3" data-selectable-paragraph="">Use Markov Chains to rank the probability of top queries.</li>
<li id="03f4" data-selectable-paragraph="">Update ML algorithm hourly or daily rather than in real-time to reduce burden.</li>
</ul>
<h1 id="93d7" data-selectable-paragraph="">What to learn next</h1>
<p id="9468" data-selectable-paragraph="">These questions should help you understand what types of problems you&rsquo;ll be expected to solve at a system design interview. Practicing solving and explaining questions like these is the most efficient way to prepare for your next interview.</p>
<p id="31e5" data-selectable-paragraph="">Happy learning!</p>
</section>
</article>',
                    'thumbnail'     => 'files/shares/top-10-system-design-interview-questions.png',
                    'published'     => 1,
                    'comment_count' => 0,
                    'published_at'  => '2021-08-18 10:22:08',
                ],
                1 => [
                    'id'               => 2,
                    'user_id'          => $user->id,
                    'parent_id'        => null,
                    'category_id'      => 6,
                    'title'            => 'Part 1. My notes for starting in the frontend development field',
                    'slug'             => 'part-1-my-notes-for-starting-in-the-frontend-development-field',
                    'meta_title'       => null,
                    'meta_description' => null,
                    'summary'          => null,
                    'content'          => '<section>
<div>
<div>
<p id="7a4f" data-selectable-paragraph="">I&rsquo;ve been meditating about starting to post Frontend and UI stuff for a while. But the main reason that pulled me back was that I&rsquo;m not a native English speaker and I was afraid of making grammar mistakes (that I probably will). However, I&rsquo;ve been in a hype of creativity and impertinence lately, so I&rsquo;ve decided to share it with the world !!</p>
<p id="2489" data-selectable-paragraph="">Like I mentioned in &ldquo;<a href="https://medium.com/@imromais/a-quick-introduction-about-myself-7b83cb1b7a8" rel="noopener">A quick introduction about myself</a>&rdquo;, I&rsquo;ve been working in the web industry for years. My first approach to the frontend development was through&nbsp;Macromedia Dreamweaver.</p>
<figure>
<div tabindex="0" role="button">
<div><img role="presentation" src="https://miro.medium.com/max/1400/1*H60MwPV5col0pvlgZD0ZqQ.png" alt="" width="700" height="422" /></div>
</div>
<figcaption data-selectable-paragraph="">Macromedia Dreamweaver.</figcaption>
</figure>
<p id="982d" data-selectable-paragraph="">In the 2<span id="rmm">0</span>00\'s applications such as&nbsp;Dreamweaver&nbsp;began to emerge as code-friendly tools, empowering thousands of amateur and professional web designers, who didn&rsquo;t know much about&nbsp;Hypertext Markup Language&nbsp;a.k.a.&nbsp;HTML. These tools promised an easy way for&nbsp;&ldquo;PSD to HTML&rdquo;, yet the code generated was a pretty sloppy, and often repetitive. It was curiosity for improving the code, the push that I needed to immerse myself into the web development world.</p>
</div>
</div>
</section>
<div role="separator">&nbsp;</div>
<section>
<div>
<div>
<h1 id="f1c4" data-selectable-paragraph="">Web development</h1>
<p id="f0d6" data-selectable-paragraph="">Web development is the building and maintenance of application that resides on remote servers and are delivered to the user&rsquo;s device over Internet. We call this a&nbsp;web application&nbsp;(web app). An &ldquo;end user&rdquo;&nbsp;can access a web app through a&nbsp;web browser.</p>
<p id="bbd2" data-selectable-paragraph="">There is a number of different things that web browsers can do, but the main function is to present the web app you asked for by requesting it from the server and displaying it on a browser window. The resource is usually an HTML document, but it might also be a PDF, a video, or some other type of content.</p>
<p id="26e0" data-selectable-paragraph="">Web development may be divided in two main branches:</p>
<ul>
<li id="ed59" data-selectable-paragraph="">Frontend Development</li>
<li id="e047" data-selectable-paragraph="">Backend Development</li>
</ul>
</div>
</div>
</section>
<div role="separator">&nbsp;</div>
<section>
<h1 id="cd5e" data-selectable-paragraph="">Frontend</h1>
<p id="0aa2" data-selectable-paragraph="">We call frontend to everything the user interacts with in the website, whether it&rsquo;s a navigation menu, forms, fonts, or buttons; all this is a combination of HTML, CSS and JavaScript. We also call it &ldquo;Client-side&rdquo; or &ldquo;Browser-side&rdquo; since all this interaction happens in the browser, not in the backend (or &ldquo;Server-side&rdquo;).</p>
<blockquote>
<p id="04b6" data-selectable-paragraph="">The Frontend of a web app is the part that users interact with to get or use the backend capacity</p>
</blockquote>
<p id="03e6" data-selectable-paragraph="">For building web components a&nbsp;frontend developer&nbsp;need to know this 3 &ldquo;programming&rdquo; languages:&nbsp;HTML,&nbsp;CSS,&nbsp;and&nbsp;JavaScript.</p>
<h2 id="9cc6" data-selectable-paragraph="">1) Hypertext Markup Language / HTML</h2>
<p id="26b6" data-selectable-paragraph="">HTML provides the structure of a web app. It is actually not a programming language, but a markup language.</p>
<p id="9365" data-selectable-paragraph="">It consists primarily of&nbsp;tags&nbsp;that are enclosed inside angle brackets. A tag is composed of the special characters&nbsp;&lt;,&nbsp;&gt;&nbsp;and&nbsp;/.</p>
<p id="1b6a" data-selectable-paragraph="">Most tags are paired to indicate the start and end of the text being marked up. For example:</p>
<figure><img role="presentation" src="https://miro.medium.com/max/500/1*cYC-XKBpCJg5XO-AMFQcQQ.png" sizes="500px" srcset="https://miro.medium.com/max/276/1*cYC-XKBpCJg5XO-AMFQcQQ.png 276w, https://miro.medium.com/max/500/1*cYC-XKBpCJg5XO-AMFQcQQ.png 500w" alt="" width="500" height="135" /></figure>
<p id="1584" data-selectable-paragraph="">You&rsquo;ll need to learn the&nbsp;<a href="https://www.w3.org/community/webed/wiki/HTML/Training/Tag_syntax" rel="noopener nofollow">basic syntax</a>, semantic HTML, forms &amp; validation, accessibility, SEO, and best practices.</p>
<p id="d0c4" data-selectable-paragraph="">It&rsquo;s important to follow the&nbsp;World Wide Web Consortium&nbsp;(<a href="https://www.w3.org/2020/Process-20200915/" rel="noopener nofollow">W3C</a>) along with the&nbsp;Web Content Accessibility Guidelines (<a href="https://www.w3.org/WAI/standards-guidelines/wcag/" rel="noopener nofollow">WCAG</a>)&nbsp;for building a true inclusive web app.</p>
<p id="0a86" data-selectable-paragraph="">Example of a simple HTML document:</p>
<pre><span id="b0ee" data-selectable-paragraph="">&lt;!DOCTYPE html&gt;<br />&lt;html&gt;<br />  &lt;head&gt;<br />    &lt;title&gt;Page Title&lt;/title&gt;<br />  &lt;/head&gt;<br />  &lt;body&gt;<br />    &lt;h1&gt;My First Heading&lt;/h1&gt;<br />    &lt;p&gt;My first paragraph.&lt;/p&gt;<br />  &lt;/body&gt;<br />&lt;/html&gt;</span></pre>
<h2 id="44be" data-selectable-paragraph="">2) Cascading Style Sheets / CSS</h2>
<p id="5f6b" data-selectable-paragraph=""><a href="https://notlaura.com/css-is-a-programming-language/" rel="noopener nofollow">CSS is a domain-specific, declarative programming language</a>. CSS is used to design HTML tags. It describes how elements should be rendered on screens, printed documents or in speech. It is not necessarily difficult to learn but it&rsquo;s difficult to master.</p>
<p id="87ca" data-selectable-paragraph="">There are a few topics in CSS that you need to pay more attention to:</p>
<ul>
<li id="ff1e" data-selectable-paragraph=""><a href="https://css-tricks.com/the-css-box-model/" rel="noopener nofollow">Box Model</a></li>
<li id="0270" data-selectable-paragraph=""><a href="https://www.digitalocean.com/community/tutorials/css-css-units-explained" rel="noopener nofollow">CSS units</a></li>
<li id="cebb" data-selectable-paragraph=""><a href="https://www.quackit.com/css/properties/css_position.cfm" rel="noopener nofollow">Position</a></li>
<li id="8190" data-selectable-paragraph=""><a href="https://www.w3schools.com/html/html_responsive.asp" rel="noopener nofollow">Responsive Layout</a></li>
<li id="db29" data-selectable-paragraph="">Flexible Box (<a href="https://web.dev/learn/css/flexbox/" rel="noopener nofollow">Flexbox</a>)+&nbsp;<a href="https://learncssgrid.com/" rel="noopener nofollow">CSS Grid</a></li>
</ul>
<p id="c122" data-selectable-paragraph="">Example of a simple&nbsp;CSS&nbsp;syntax :</p>
<pre><span id="fb2f" data-selectable-paragraph="">/* <br />- Heading size system<br />- This is a comment block in CSS <br />*/<br />body {font-size: 1em;}</span><span id="0b73" data-selectable-paragraph="">h1 {font-size: 2em;}<br />h2 {font-size: 1.8125em;}<br />h3 {font-size: 1.625em;} // this is an in-line comment<br />h4 {font-size: 1.4375em;}<br />h5 {font-size: 1.25em;}<br />h6 {font-size: 1.125em;}<br /></span></pre>
<h2 id="ad83" data-selectable-paragraph="">3) JavaScript</h2>
<p id="51ff" data-selectable-paragraph="">The&nbsp;Hyper Text Transport Protocol, or&nbsp;HTTP, as the name implies, transports HTML across a network for viewing it. But the problem with HTML is that it is completely static, providing no capabilities to implement logic.</p>
<p id="f33b" data-selectable-paragraph="">JavaScript, on the other hand, is a&nbsp;<a href="https://askinglot.com/what-is-static-and-dynamic-programming-language" rel="noopener nofollow">dynamic programming language</a>&nbsp;that supports math calculations, allows you to dynamically add HTML contents to the&nbsp;<a href="https://developer.mozilla.org/en-US/docs/Web/API/Document_Object_Model/Introduction" rel="noopener nofollow">DOM</a>, creates dynamic style declarations, fetches contents from other websites, and lots more.</p>
<p id="264b" data-selectable-paragraph="">JavaScript is compatible with other languages. This is super important as some web servers may run on different languages whether it&rsquo;s Python, Ruby, Java or .NET.</p>
<p id="59ac" data-selectable-paragraph="">You should spend most of your time on this part, nowadays JavaScript is an extremely versatile language, you can code on the client-side or in the server-side (backend) using Node.js</p>
</section>
<div role="separator">&nbsp;</div>
<section>
<div>
<div>
<h1 id="1403" data-selectable-paragraph="">The community &amp; the JS revolution</h1>
<p id="0c4b" data-selectable-paragraph="">In 2021 JavaScript completes its ninth year in a row as the most commonly used programming language, according to the Stack Overflow survey conducted in May this year.</p>
<figure>
<div><img role="presentation" src="https://miro.medium.com/max/1250/1*wXfwi_m5bkd4hoyUsA-32w.png" alt="" width="625" height="718" /></div>
<figcaption data-selectable-paragraph=""><a href="https://insights.stackoverflow.com/survey/2021" rel="noopener nofollow">Stack Overflow 2021 Developer Survey.</a>&nbsp;JavaScript it&rsquo;s by far the most popular programming language.</figcaption>
</figure>
<p id="fbfe" data-selectable-paragraph="">There&rsquo;s a crucial point on the evolution of JavaScript; the release of&nbsp;<a href="http://es6-features.org/#Constants" rel="noopener nofollow">ECMAScript 6</a>&nbsp;(or ECMAScript 2015). This update added new syntax for writing more complex applications and many other features, that would define the next generation of JavaScript, including &ldquo;The Framework era&rdquo;.</p>
<h2 id="bb94" data-selectable-paragraph="">JS Frameworks and Libraries</h2>
<p id="4f46" data-selectable-paragraph="">Frameworks and libraries are both code written by someone else that helps you perform some common tasks.</p>
<p id="0a70" data-selectable-paragraph="">A framework inverts the control of the app. It tells the developer what they need. A library doesn&rsquo;t. The developer calls the library where and when&nbsp;they&nbsp;need it.</p>
<p id="4b9a" data-selectable-paragraph="">The degree of freedom a library or framework gives the developer, will dictate how &ldquo;opinionated&rdquo; it is.</p>
<p id="8f80" data-selectable-paragraph="">Back to 2010 tech giants started building their own frameworks of JavaScript, you might have heard of&nbsp;Angular, backed by Google, and&nbsp;React, backed by FaceBook. I also have to mention&nbsp;Vue&nbsp;here that, even if not supported by a tech powerhouse, completes the triad of important JS frameworks.</p>
</div>
</div>
</section>',
                    'thumbnail'     => 'https://miro.medium.com/max/1400/1*H60MwPV5col0pvlgZD0ZqQ.png',
                    'published'     => 1,
                    'comment_count' => 0,
                    'published_at'  => '2021-08-18 10:22:57',
                ],
                2 => [
                    'id'               => 3,
                    'user_id'          => $user->id,
                    'parent_id'        => null,
                    'category_id'      => 7,
                    'title'            => 'Codility algorithm practice Lesson 3: Time Complexity, Task 1: Frog Jump — a Python approach',
                    'slug'             => 'codility-algorithm-practice-lesson-3-time-complexity-task-1-frog-jump-a-python-approach',
                    'meta_title'       => null,
                    'meta_description' => null,
                    'summary'          => null,
                    'content'          => '<p id="f771" data-selectable-paragraph="">Greetings, coders! I hope you&rsquo;ve enjoyed our&nbsp;<a href="https://medium.com/@deck451/codility-algorithm-practice-lesson-2-arrays-task-2-odd-occurrences-in-array-a-python-approach-ecfad7078e61" rel="noopener">last</a>&nbsp;task. Today we&rsquo;ll be tackling another fine point o<span id="rmm">f</span>&nbsp;algorithm development:&nbsp;time complexity. Time complexity is, in simple terms, the amount of time taken by an algorithm to run, expressed as a function of the size of the input. We determine / estimate the time complexity of an algorithm by counting the number of elementary operations performed by the algorithm, under the assumption that each elementary operation takes a fixed amount of time to perform. This way, the amount of time taken and the number of elementary operations performed are considered to differ by at most a constant factor.</p>
<p id="db08" data-selectable-paragraph="">Now, because an algorithm&rsquo;s running time varies among different inputs of the same size, a good practice would be to consider the worst-case time complexity. Less common and explicitly specified, some consider average-case time complexity instead.</p>
<p id="4f88" data-selectable-paragraph="">Time complexity is typically expressed using the&nbsp;big O&nbsp;notation:&nbsp;O(n),&nbsp;O(n log n),&nbsp;O(n^a),&nbsp;O(2^n), etc.</p>
<p id="4336" data-selectable-paragraph="">Without going into too much detail on the big O notation, it&rsquo;s enough to say we should always try to find the algorithm that features the best complexity function it can. Since there are many roads we can take from requirements to the software deliverable, we should always try to choose the most efficient road.</p>
<p id="6d9f" data-selectable-paragraph="">Codility&rsquo;s first task for this lesson is called&nbsp;Frog Jump. We&rsquo;re basically presented with a small frog that wants to get to the other side of the road. Imagine the road as a fragment of the positive integer numbers axis. The frog&rsquo;s located at position X and wants to reach a position greater than or equal to Y &mdash; that&rsquo;s the other side of the road. The frog can only jump a fixed distance, D.</p>
<p id="4826" data-selectable-paragraph="">The task: count the minimal number of jumps performed to reach Y from the starting point of X.</p>
<p id="53da" data-selectable-paragraph="">Conditions and limitations: X, Y, D are integers within the range [1&hellip;1,000,000,000]. Also, X &le; Y.</p>
<p id="67fe" data-selectable-paragraph="">One possible approach would be to initialize a counter for the steps and then write a&nbsp;while&nbsp;loop, incrementing the current position by D at each step, while it&rsquo;s lower than Y. This would require a finite number of steps. Greater than or equal to 1.</p>
<p id="6106" data-selectable-paragraph="">But what if we could do better?</p>
<p id="7478" data-selectable-paragraph="">Let&rsquo;s consider the distance the frog has to cover. According to the problem, it would be at least Y &mdash; X. The frog jumps a distance D. Let&rsquo;s take a simple example where the frog only needs 2 jumps to get from X to Y. This would imply that the frog jumped a total of 2*D to get from X to Y. This could be written as</p>
<pre><span id="5455" data-selectable-paragraph="">X + (2 * D) = Y</span></pre>
<p id="4d4b" data-selectable-paragraph="">or, simplifying further:</p>
<pre><span id="e524" data-selectable-paragraph="">2 = (Y - X) / D</span></pre>
<p id="6ae2" data-selectable-paragraph="">The number of steps can be expressed as the result of dividing the distance the frog has to cover (Y &mdash; X) by its jump size (D). Of course, the result would need rounding-up to the next integer, since the frog can jump a&nbsp;fixed&nbsp;distance and we want to get the minimum number of jumps that cover&nbsp;at least&nbsp;Y &mdash; X so the frog can successfully reach Y.</p>
<p id="3ded" data-selectable-paragraph="">This approach seems better considering that all we need, instead of a while loop and a counter and whatnot, are 3 simple math operations: subtraction, division and rounding:</p>
<pre><span id="d2c1" data-selectable-paragraph="">import math</span><span id="d133" data-selectable-paragraph="">def solution(current, target, jump):<br />    """Solution method implementation."""<br />    return math.ceil((target - current) / jump)</span></pre>
<p id="7df8" data-selectable-paragraph="">Simple, right? This solution yields 100% score upon submission to Codility and the determined complexity is&nbsp;O(1), which stands for&nbsp;constant time complexity, meaning that whatever input arguments we&rsquo;re given in terms of X, Y and jump distance, the algorithm will always perform the very same number of elementary operations.</p>
<p id="cd79" data-selectable-paragraph="">Remember: always, after writing / seeing / reviewing an algorithm that works, ask yourself this: is this the best algorithm for the task at hand? Always wonder and question. It&rsquo;s what drives us further on higher plains of knowledge.</p>
<p id="128f" data-selectable-paragraph="">Next, we&rsquo;re gonna identify the&nbsp;<a href="https://medium.com/@deck451/codility-algorithm-practice-lesson-3-time-complexity-task-2-perm-missing-element-a-python-67c98523769" rel="noopener">missing element in a given permutation</a>. But for now, cheers and happy coding!</p>',
                    'thumbnail'     => 'files/shares/codility-algorithm-practice-lesson-3-time-complexity-task-1-frog-jump-a-python-approach.jpeg',
                    'published'     => 1,
                    'comment_count' => 0,
                    'published_at'  => '2021-08-18 10:24:57',
                ],
                3 => [
                    'id'               => 4,
                    'user_id'          => $user->id,
                    'parent_id'        => null,
                    'category_id'      => 5,
                    'title'            => 'How do you make friends as an adult?',
                    'slug'             => 'how-do-you-make-friends-as-an-adult',
                    'meta_title'       => null,
                    'meta_description' => null,
                    'summary'          => null,
                    'content'          => '<section>
<div>
<div>
<p id="f0c1" data-selectable-paragraph="">When I started writing this, I thought I&rsquo;d be complaining about how it&rsquo;s too hard to make friends as an adult. It is. I still don&rsquo;t know how to do it. But I also realized that I&rsquo;m so lucky I have a few excellent women in my life regardless of where they live. So here&rsquo;s to the women who knew me as an angsty teenager on a different continent who have been willing to reopen old conversations. The women I only knew from online profile pictures who&rsquo;ve supported me through leaving a faith and a marriage. The women I have recently met and connected with through writing.</p>
</div>
</div>
</section>
<div role="separator">&nbsp;</div>
<section>
<div>
<div>
<p id="dbd5" data-selectable-paragraph="">Yes, I reached out to Lessie, too. We still live in different states with few opportunities to see each other, but I realized that my entire life, the women I cared about the most pretty much always lived far away from me. These long-distance relationships are not less than &ldquo;real&rdquo; relationships with people who are in the same location. It just happens to be the environmental circumstance but it says nothing about the substance of the friendship.</p>
<p id="7249" data-selectable-paragraph="">We messaged back and forth a bit and then talked on the phone. For two hours. It was lovely. Each of us has had a rough go for a few years and the timing was just right to reconnect. We laughed a lot and cried a little and apologized to each other for not staying in touch. And now, we try again.</p>
</div>
</div>
</section>',
                    'thumbnail'     => 'files/shares/how-do-you-make-friends-as-an-adult.jpeg',
                    'published'     => 1,
                    'comment_count' => 0,
                    'published_at'  => '2021-08-18 10:27:27',
                ],
                4 => [
                    'id'               => 5,
                    'user_id'          => $user->id,
                    'parent_id'        => null,
                    'category_id'      => 5,
                    'title'            => 'The 10 Most Hated States in America in 2021',
                    'slug'             => 'the-10-most-hated-states-in-america-in-2021',
                    'meta_title'       => null,
                    'meta_description' => null,
                    'summary'          => null,
                    'content'          => '<article>
<div>
<section>
<div>
<div>
<p id="7a1e" data-selectable-paragraph="">The State you live in might be one of the most hated states in America. With over 50 states in the U.S., it&rsquo;s a guarantee that some of them are going to be clear favorites and others are going to be hated by nearly every American.</p>
<h1 id="cda3" data-selectable-paragraph="">10.&nbsp;Wisconsin</h1>
<p id="1604" data-selectable-paragraph="">Speaking of hate&hellip;</p>
<p id="4d51" data-selectable-paragraph="">Wisconsin, the Dairy State, has also been dubbed the Hater State. It takes the cheese when it comes to having the most racial despair in the entire US.</p>
<p id="fa62" data-selectable-paragraph="">Education, jobs, and li<span id="rmm">v</span>ing conditions are sliced anything but evenly in the Land of Cheese. And, the gap isn&rsquo;t in one generalized location either. It&rsquo;s a problem all across the state. There are about 5,000,000 white people in the state and only 360,000 black people but there are more blacks living in poverty than there are whites &mdash; three out of ten don&rsquo;t have enough food, and struggle to survive. The average annual income for whites is close to $60,000 while the average for blacks is $29,000.</p>
<p id="12b6" data-selectable-paragraph="">Not only are things racially polluted in Wisconsin, 90% of the lakes are too. From&nbsp;manure-tainted&nbsp;runoffs to chemicals from rural farms, you might say the water is just full of crap!</p>
<p id="4628" data-selectable-paragraph="">A recent study called Wisconsin&rsquo;s behavior a &ldquo;Midwest Nice&rdquo; malfunction. We think their Dairy State is downright sour!</p>
<h1 id="6f49" data-selectable-paragraph="">9.&nbsp;Nevada</h1>
<p id="f6be" data-selectable-paragraph="">Nevada is home to Las Vegas, the Gambling Capital of the World. You&rsquo;d think with the state being lucky enough to rake in the revenue travelers bring to the economy, they&rsquo;d invest in improvements. Obviously, that&rsquo;s not in the cards.</p>
<p id="9e84" data-selectable-paragraph="">Nevada is often called the &ldquo;Ugliest State in the US&rdquo; and we have to agree. Not only are there long stretches of desolate desert land where you can&rsquo;t find gas or a restroom, the state is also infested with drunk drivers and abandoned nuclear test sites too.</p>
<p id="23d5" data-selectable-paragraph="">Nevada&rsquo;s sales tax is pretty ugly too. While the current state rate is only 4.6%, local businesses can tack on more, bringing it as high as 8.26%. A trip to Nevada can be taxing indeed. And living there is even worse.</p>
<h1 id="ff32" data-selectable-paragraph="">8.&nbsp;Louisiana</h1>
<p id="286c" data-selectable-paragraph="">Famous for Mardi Gras parties and the best Cajun food in the world, even those things can&rsquo;t make up for all the bad things about Louisiana. It has the fifth highest violent crime rate in the nation. Over 518 out of every 100,000 people are victimized every year. State and local corruption is so common, an investigation was launched last year. The investigation is ongoing and, unfortunately, so is the corruption.</p>
<p id="3670" data-selectable-paragraph="">Louisiana does have a very low cost of living and is culturally diverse. The state has plenty of entertainment to offer tourists too&hellip;but those things hardly make up for the high anxiety of being in the midst of high crime. To be on the safe side, avoid Louisiana entirely.</p>
<h1 id="09df" data-selectable-paragraph="">7.&nbsp;Alaska</h1>
<p id="772b" data-selectable-paragraph="">Alaska is breathtakingly beautiful. All things considered, it can be pretty ugly too though because Alaska has a dark side. Lasting for about two long months, Polar Darkness is a thing in Alaska. It&rsquo;s hard to appreciate the majestic mountains, awesome coastlines, and amazing landscapes when you can&rsquo;t see them.</p>
<p id="ff21" data-selectable-paragraph="">And did we mention&hellip;it&rsquo;s cold too? Alaska has the coldest temperatures in the nation, averaging just 26 degrees but diving as low as -30 at times. An average of 75 inches of snow falls a year. Since it is also the largest state in the US, that&rsquo;s a lot of cold&hellip;and dark.</p>
<p id="a47d" data-selectable-paragraph="">The cold, dark fact is that Alaska just isn&rsquo;t a state that&rsquo;s easy to warm up to.</p>
<h1 id="5ca5" data-selectable-paragraph="">6.&nbsp;Pennsylvania</h1>
<p id="87e8" data-selectable-paragraph="">When you think of Pennsylvania, you probably think of quaint Amish villages sprinkled with cozy shops and red barns on green rolling meadow farmland. Think again though. Pennsylvania is the worst state for acid mine drainage. More than 2,400 miles of its streams are contaminated.</p>
<p id="4e03" data-selectable-paragraph="">The air is bad in Pennsylvania too. It ranks right behind California in air pollution with ozone and particle pollution being among the top complaints in the state that&rsquo;s notorious for its coal and steel industries.</p>
<p id="d164" data-selectable-paragraph="">The bottom line is that Pennsylvania is a state that will take your breath away&hellip;literally!</p>
<h1 id="802a" data-selectable-paragraph="">5.&nbsp;California</h1>
<p id="828e" data-selectable-paragraph="">California&hellip;the Golden State. Known for its warm weather, beautiful beaches, and the 1948 Gold Rush, California is anything but sunny when it comes to money. Famous for being home to&hellip;well, the famous, you almost have to be rich and famous to afford to live (or visit) the state with the cost of living being 38% higher than the rest of the U.S. Houses sell for about $600,000 compared to a $320,000 national average and rent runs just under $2,000 per month instead of $1,200 like you&rsquo;ll find in most other states.</p>
<p id="ac40" data-selectable-paragraph="">Sales tax is 7.25%, the highest in the US. That&rsquo;s not all, Property tax and state income tax are outrageous too. We get the impression there&rsquo;s still some gold digging going on in California.</p>
<h1 id="afe9" data-selectable-paragraph="">4.&nbsp;Texas</h1>
<p id="ea13" data-selectable-paragraph="">Don&rsquo;t mess with Texas! Seriously! Texas is a place you love&hellip;or, you hate and there seems to be a super-sized helping of hate for the state. Texas is the second largest state in the US- stretching across 270,000 square miles. Everything in it is big, including its attitude.</p>
<p id="cb0b" data-selectable-paragraph="">Texas is a gun-toting state where you&rsquo;re likely to find signs posted like &ldquo;Gun Control is when you use both hands&rdquo;. That must explain the old law still in existence that a 24 hour written or spoken notice must be given prior to committing a robbery. Ok&hellip;that makes sense.</p>
<p id="c228" data-selectable-paragraph="">Texas is confusing &mdash; full of mixed messages ranging from overly friendly to downright hostile. When driving in the rural areas, if you don&rsquo;t wave or give a hand signal to everyone you see, you&rsquo;ll be labeled as rude. Go to a city, like Houston or Dallas, however, and give a hand signal and you might get shot&hellip;and not by the &ldquo;good ole boys&rdquo;. The more populated Texas becomes, the more the crime rate is growing in the big cities too.</p>
<p id="256c" data-selectable-paragraph="">Texas is just&hellip;a big mess. Tip your ten-gallon hat to that, y&rsquo;all!</p>
<h1 id="24ce" data-selectable-paragraph="">3.&nbsp;Washington</h1>
<p id="2ce8" data-selectable-paragraph="">Washington is one of the worst states because of&hellip;nothing. There&rsquo;s nothing to see, nowhere to go, and nothing to do. Even the food is bad. No one has spirit in Washington but it&rsquo;s no wonder enthusiasm is a wash out &mdash; in Seattle alone, it rains an average of 152 days a year. A recent report revealed that half of Seattle adults suffer from depression. Go figure!</p>
<p id="d8e0" data-selectable-paragraph="">When the sun does decide to shine, it&rsquo;s as humid as a marsh. But, it&rsquo;s not all doom and gloom in Washington though. While many say nothing good has ever come out of the state, we disagree&hellip;.Starbucks has. Fortunately, there are 46 other states where you can get a double shot choco ice expresso law tay grande mocha since this looser state falls so short.</p>
<h1 id="312c" data-selectable-paragraph="">2.&nbsp;Florida</h1>
<p id="f5de" data-selectable-paragraph="">If you want sunshine, you&rsquo;ll have to go to Florida. Dubbed the Sunshine State, the sun shines 237 days a year. It&rsquo;s the third most populated state boasting 825 miles of accessible beaches soaking up the sun. But, the state has some serious bugs&hellip;literally. Florida leads the nation as having the worst bug problem in the nation.</p>
<p id="5ed9" data-selectable-paragraph="">There are 12,500 species of insects that call the state home. Biting midges, red fire ants, bed bugs, mosquitoes, Florida carpenter ants, bees, wasps, chiggers and ticks are among the most common creepy crawly pests. As if that&rsquo;s not enough, alligators and crocodiles roam the swamps and once every six-and-a-half years, a major hurricane slams in.</p>
<p id="e63a" data-selectable-paragraph="">But, if you decide to take your chances and indulge on the miles of glorious sandy beaches, beware&hellip;there were 129 shark bites in Florida just last year.</p>
<h1 id="8603" data-selectable-paragraph="">1.&nbsp;New Mexico</h1>
<p id="e097" data-selectable-paragraph="">There&rsquo;s not much going on by the water in New Mexico: probably because there&rsquo;s not much water. Dry and parched, they say New Mexico only has two types of weather, hot&hellip;and hotter. Average summer temperatures are often over 100 degrees.</p>
<p id="46b7" data-selectable-paragraph="">The cost of living is low in New Mexico but that doesn&rsquo;t mean much when jobs are as scarce as water. Earning a spot as the 7th worst state for employment, it doesn&rsquo;t matter how cheap things are if you have NO job and NO money.</p>
<p id="1c91" data-selectable-paragraph="">Not much grows here in this arid and deserted wasteland either, except tons of cactus and tumbleweeds amongst the rolling sand dunes and massive canyons of empty space. So unless you have a great affection for never seeing any other color but bland bround sand and the occasional green dot, then you might want to take a lesson from the tumbleweed and blow right past this state.</p>
<h1 id="4283" data-selectable-paragraph="">Bonus:&nbsp;New Jersey</h1>
<p id="ef24" data-selectable-paragraph="">Everything is definitely NOT coming up roses in New Jersey, the Garden State. In fact&hellip;far from it. So many outsiders hate the state, natives to New Jersey now have a sign that says, &ldquo;We don&rsquo;t like you either!&rdquo;</p>
<p id="1aad" data-selectable-paragraph="">New Jersey is a melting pot of all there is to hate in a state. It is crowded, expensive, and crime-ridden. It&rsquo;s also the most densely populated state with natives who are rude and talk funny.</p>
<p id="eb1f" data-selectable-paragraph="">If you think there&rsquo;s even one good part of New Jersey, you&rsquo;re wrong. North Jersey is an industrial eyesore while South Jersey is swimming with snobby beaches and overpriced everything.</p>
<p id="ccb9" data-selectable-paragraph="">Every rose has its thorns but the Garden State seems to be nothing but a thorn in the side of the other 49 states.</p>
</div>
</div>
</section>
</div>
</article>
<div class="pp fs ei nw w us ek nu ny" style="box-sizing: inherit; width: 1663px; position: fixed; top: 0px; pointer-events: none; will-change: opacity, transform; opacity: 1; transform: translateY(86px); transition: opacity 200ms ease 0s; color: rgba(0, 0, 0, 0.8); font-family: medium-content-sans-serif-font, -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Oxygen, Ubuntu, Cantarell, \'Open Sans\', \'Helvetica Neue\', sans-serif; background-color: #ffffff;" data-test-id="post-sidebar">
<div class="n p" style="box-sizing: inherit; display: flex; justify-content: center;">
<div class="aq ar as at au av aw w" style="box-sizing: inherit; width: 1192px; max-width: 1192px; min-width: 0px; margin: 0px 64px;">
<div class="nz n aj" style="box-sizing: inherit; display: flex; flex-direction: column; width: 197px;">
<div class="xv" style="box-sizing: inherit; pointer-events: auto;">
<div style="box-sizing: inherit;">
<div class="oa s" style="box-sizing: inherit; margin-bottom: 20px;">
<div class="ob s" style="box-sizing: inherit; padding-bottom: 5px;">&nbsp;</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>',
                    'thumbnail'     => 'files/shares/the-10-most-hated-states-in-america-in-2021.jpeg',
                    'published'     => 1,
                    'comment_count' => 0,
                    'published_at'  => '2021-08-18 10:36:15',
                ],
                5 => [
                    'id'               => 6,
                    'user_id'          => $user->id,
                    'parent_id'        => null,
                    'category_id'      => 3,
                    'title'            => 'How latte art in South Africa led to a job from hell in Oman',
                    'slug'             => 'how-latte-art-in-south-africa-led-to-a-job-from-hell-in-oman',
                    'meta_title'       => null,
                    'meta_description' => null,
                    'summary'          => null,
                    'content'          => '<div data-component="text-block">
<div>
<p>A young South African barista thought he had found the job of a lifetime in Oman, but ended up being held captive and made to work without pay - forcing family and friends to raise money to free him.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>The offer came via Facebook when 30-year-old Athenkosi Dyonta was working at a caf&eacute; in the city of George, a popular holiday resort in South Africa\'s Western Cape province.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>"There was nothing wrong about my work but I was just looking for better opportunities and a better salary," he says.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>Athenkosi used to share his latte art - the patterns and designs that are made with milky coffee - with other passionate baristas from all over the world in an online group.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>That\'s where a woman approached him with an offer of a job in Oman.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>It was tempting: as well as a decent salary, he was offered free accommodation, food and transport.</p>
</div>
</div>
<div id="piano-inline1"></div>
<div data-component="text-block">
<div>
<p>She said his visa would be taken care of - all he would have to do was pay for a plane ticket, a medical check-up and a Covid test.</p>
</div>
</div>
<div data-component="image-block">
<figure>
<div><img src="https://ichef.bbci.co.uk/news/976/cpsprodpb/5247/production/_119636012_mediaitem119635880.jpg" srcset="https://ichef.bbci.co.uk/news/240/cpsprodpb/5247/production/_119636012_mediaitem119635880.jpg 240w, https://ichef.bbci.co.uk/news/320/cpsprodpb/5247/production/_119636012_mediaitem119635880.jpg 320w, https://ichef.bbci.co.uk/news/480/cpsprodpb/5247/production/_119636012_mediaitem119635880.jpg 480w, https://ichef.bbci.co.uk/news/624/cpsprodpb/5247/production/_119636012_mediaitem119635880.jpg 624w, https://ichef.bbci.co.uk/news/800/cpsprodpb/5247/production/_119636012_mediaitem119635880.jpg 800w, https://ichef.bbci.co.uk/news/976/cpsprodpb/5247/production/_119636012_mediaitem119635880.jpg 976w" alt="Athenkosi makes latte art" width="976" height="549" loading="lazy" />IMAGE SOURCEGETTY IMAGES</div>
<figcaption>image captionAthenkosi Dyonta was part of an online group sharing latte designs</figcaption>
</figure>
</div>
<div data-component="text-block">
<div>
<p>"I thought when he comes back after a year or so, we\'ll buy ourselves a house," recalls his girlfriend Pheliswa Feni, 28, with whom he has two children.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>"We were living in shacks, so I thought maybe a house... then maybe a car, maybe take our kids to better schools."</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>So the couple borrowed money for Athenkosi\'s airfare, and he left for Oman in February.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>His first impressions of the country were positive. "It was so beautiful,"&nbsp;<a href="https://www.bbc.co.uk/sounds/play/p09q5zp3">he told The Comb podcast</a>.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>He was driven from the capital, Muscat, to a town called Ibra where he quarantined in a hotel for seven days.</p>
</div>
</div>
<div id="piano-inline2"></div>
<div data-component="text-block">
<div>
<p>"I thought: \'All my dreams are coming true.\'"</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>On arrival, he had been fitted with a tracking bracelet for the quarantine period.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>Once that was over a doctor removed the tracker and he was moved to his new home - an alarming sight.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>"It was just a dirty place - a small room, with a mattress and boxes," said Athenkosi, who had to share the space with a man from Nepal.</p>
</div>
</div>
<div data-component="crosshead-block">
<h2>Threats and no salary</h2>
</div>
<div data-component="text-block">
<div>
<p>It marked the beginning of an extremely distressing period as Athenkosi quickly learned that the caf&eacute; he thought he would be working in didn\'t exist.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>Instead of serving coffee, he spent 12 to 14 hours a days working as a caf&eacute; cleaner.</p>
</div>
</div>
<div id="piano-inline3"></div>
<div data-component="text-block">
<div>
<p>When he wasn\'t working he was locked in his shared room - the food was dire and he wasn\'t being paid.</p>
</div>
</div>
<div data-component="image-block">
<figure>
<div><img src="https://ichef.bbci.co.uk/news/976/cpsprodpb/F043/production/_119970516_222088825_4326615187395860_1802238035767510721_n.jpg" srcset="https://ichef.bbci.co.uk/news/240/cpsprodpb/F043/production/_119970516_222088825_4326615187395860_1802238035767510721_n.jpg 240w, https://ichef.bbci.co.uk/news/320/cpsprodpb/F043/production/_119970516_222088825_4326615187395860_1802238035767510721_n.jpg 320w, https://ichef.bbci.co.uk/news/480/cpsprodpb/F043/production/_119970516_222088825_4326615187395860_1802238035767510721_n.jpg 480w, https://ichef.bbci.co.uk/news/624/cpsprodpb/F043/production/_119970516_222088825_4326615187395860_1802238035767510721_n.jpg 624w, https://ichef.bbci.co.uk/news/800/cpsprodpb/F043/production/_119970516_222088825_4326615187395860_1802238035767510721_n.jpg 800w, https://ichef.bbci.co.uk/news/976/cpsprodpb/F043/production/_119970516_222088825_4326615187395860_1802238035767510721_n.jpg 976w" alt="Athenkosi washing up" width="976" height="549" loading="lazy" />IMAGE SOURCEATHENKOSI DYONTA</div>
<figcaption>image captionInstead of serving coffee Athenkosi spent up to 14 hours a days washing and cleaning</figcaption>
</figure>
</div>
<div data-component="text-block">
<div>
<p>"I got skinny there. I was getting bread and milk - sometimes a roll with an egg - maybe once or twice a day.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>"I was getting no salary, I was just working."</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>When Athenkosi asked his employer about pay he would be threatened - on one occasion he was taken to a forest where a group of men shouted at him to stop causing trouble.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>Pheliswa stayed in touch with her boyfriend over the phone: "I was very scared because I thought maybe they would kill him."</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>Athenkosi also says his employer threatened to take him to the police.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>They said "the police would arrest me because I signed a contract", he says.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>What he hadn\'t realised was that he had entered a sponsorship agreement used in parts of the Middle East called "kafala" - which gives private citizens and companies almost total control over a migrant worker\'s employment and immigration status.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>Rights groups say the system leaves workers highly vulnerable to abuse and exploitation as they are unable to change jobs or leave the country without their employer\'s consent.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>One day about a month in, Athenkosi saw the door of his room had been left open and so tried to escape, heading to the car park where he asked a stranger to take him to a police station.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>But once he was there none of the officers spoke English - and he was told he\'d need to wait three hours for a translator to arrive.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>Instead he rushed back to his room, fearing he\'d get in trouble for leaving.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>Back at work, with long hours and a single day off on Fridays, Athenkosi began to despair: "I was feeling so bad I decided to die rather than living like that."</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>He attempted to take his own life and ended up recovering in hospital where he confided in a doctor, who explained that the only way to escape would be to pay off his employer.</p>
</div>
</div>
<div data-component="crosshead-block">
<h2>\'Bring back Athenkosi\'</h2>
</div>
<div data-component="text-block">
<div>
<p>So he approached his employer about this - they agreed to let him leave if he paid what was termed a "breach of contract" fee.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>Pheliswa, who was already in debt for the airfare, set to work to raise the money: "I told everyone I could tell, I sent it to every WhatsApp number that I have."</p>
</div>
</div>
<div data-component="image-block">
<figure>
<div><img src="https://ichef.bbci.co.uk/news/976/cpsprodpb/09CB/production/_119970520_219424612_4326615290729183_1320502948957413351_n.jpg" srcset="https://ichef.bbci.co.uk/news/240/cpsprodpb/09CB/production/_119970520_219424612_4326615290729183_1320502948957413351_n.jpg 240w, https://ichef.bbci.co.uk/news/320/cpsprodpb/09CB/production/_119970520_219424612_4326615290729183_1320502948957413351_n.jpg 320w, https://ichef.bbci.co.uk/news/480/cpsprodpb/09CB/production/_119970520_219424612_4326615290729183_1320502948957413351_n.jpg 480w, https://ichef.bbci.co.uk/news/624/cpsprodpb/09CB/production/_119970520_219424612_4326615290729183_1320502948957413351_n.jpg 624w, https://ichef.bbci.co.uk/news/800/cpsprodpb/09CB/production/_119970520_219424612_4326615290729183_1320502948957413351_n.jpg 800w, https://ichef.bbci.co.uk/news/976/cpsprodpb/09CB/production/_119970520_219424612_4326615290729183_1320502948957413351_n.jpg 976w" alt="Pheliswa Feni and Athenkosi Dyonta" width="976" height="549" loading="lazy" />IMAGE SOURCESNAZO GULWA</div>
<figcaption>image captionPheliswa (L) mobilised friends, family and the local community to bring Athenkosi (R) home</figcaption>
</figure>
</div>
<div data-component="text-block">
<div>
<p>As word spread within the George community about Athenkosi\'s situation, a "Bring Back Athenkosi" Facebook page was created and T-shirts were printed.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>A local group called The George Community Forum stepped in to help with fundraising. Donations poured in, and Athenkosi\'s family also sold one of their 10 cows for about $800 (&pound;600).</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>The Omani employer then upped the figure, saying it wasn\'t enough to cover the food and lodging.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>In total more than 23,000 rand ($1,500; &pound;1,200) was paid for Athenkosi\'s release.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>When he stepped out of the arrivals door in George in April, he was greeted by dozens of people who had helped secure his release.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>"I was so excited&hellip; to see family, friends," he says.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>It is almost four months since Athenkosi came home and he is now back at his old barista job.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>But he is also struggling to come to terms with his experience.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>"I am traumatised emotionally. I can\'t forget about it."</p>
</div>
</div>',
                    'thumbnail'     => 'files/shares/how-latte-art-in-south-africa-led-to-a-job-from-hell-in-oman.jpg',
                    'published'     => 1,
                    'comment_count' => 0,
                    'published_at'  => '2021-08-18 10:41:16',
                ],
                6 => [
                    'id'               => 7,
                    'user_id'          => $user->id,
                    'parent_id'        => null,
                    'category_id'      => 1,
                    'title'            => 'US left too quickly, says Afghanistan bank governor',
                    'slug'             => 'us-left-too-quickly-says-afghanistan-bank-governor',
                    'meta_title'       => null,
                    'meta_description' => null,
                    'summary'          => null,
                    'content'          => '<div data-component="text-block">
<div>
<p>The central bank governor who fled Afghanistan this weekend has told the BBC he wished the country had been left with more time to plan for the withdrawal of US troops.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>Ajmal Ahmady said it was the Americans\' right to leave, even though most Afghans wished they had stayed.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>But he said there should have been a "longer timeline to implement it".</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>He also rejected President Biden\'s assertion that the Afghan military had failed to fight for its country.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>"I wouldn\'t qualify this as a military victory for the Taliban," he told the BBC\'s Victoria Craig and Will Bain.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>"I would qualify this as perhaps an intelligence victory, a victory where they were able to convince or make deals with people to surrender."</p>
</div>
</div>
<div id="piano-inline1"></div>
<div data-component="unordered-list-block">
<div>
<div>
<ul role="list">
<li><a href="https://www.bbc.co.uk/news/world-asia-57933979">How the Taliban swept across Afghanistan</a></li>
<li><a href="https://www.bbc.co.uk/news/world-47391821">How much has the Afghanistan war cost?</a></li>
</ul>
</div>
</div>
</div>
<div data-component="text-block">
<div>
<p>Speaking for the first time since tweets of his&nbsp;<a href="https://www.bbc.co.uk/news/business-58230941">dramatic exit from the country went viral</a>, Mr Ahmady spoke of the chaos at Kabul airport as he tried to leave on Sunday.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>The former central bank governor, who had also held a brief as Afghanistan\'s minister for industry and commerce, accepted that wide scale corruption in the country had been a contributing factor to undermining confidence in the authorities.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>"There was significant amounts of corruption in the Afghan government, you cannot deny that, that is true. But I think there were actions being taken to reduce that and it\'s very difficult to do in just the span of a few years."</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>Asked if that failure to tackle corruption could have contributed to recent events Mr Ahmady said: "Was it the only or major contributing factor? I think it was major factor.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>"But I think also the [peace] deal that Ambassador Khalizad [the US special envoy to Afghanistan] negotiated [with the Taliban] which excluded the Afghan government contributed to the de-legitimisation.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>"And I think it was in some part the Afghan government\'s failure in handling corruption&hellip; I think you can count issues and problems on both sides."</p>
</div>
</div>
<div id="piano-inline2"></div>
<div data-component="text-block">
<div>
<p>Despite this, Mr Ahmady said he was still unable to get his head around the speed of the country\'s fall to the Taliban.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>Among his immediate concerns are the issues facing the country\'s beleaguered economy, with fears of runaway inflation and a collapse in the currency.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>"I think the economic situation will deteriorate. I would expect donor flows [of aid] to significantly decline over the next couple of months, and that\'s going to cause... the currency to depreciate.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>"That\'s going to in turn lead to higher inflation, pressure on the banking system, and in turn higher poverty rates," Mr Ahmady said.</p>
</div>
</div>',
                    'thumbnail'     => 'files/shares/us-left-too-quickly-says-afghanistan-bank-governor.jpg',
                    'published'     => 1,
                    'comment_count' => 0,
                    'published_at'  => '2021-08-18 10:42:35',
                ],
                7 => [
                    'id'               => 8,
                    'user_id'          => $user->id,
                    'parent_id'        => null,
                    'category_id'      => 1,
                    'title'            => 'Trendy shoffices and pizza ovens raised lockdown fire risks',
                    'slug'             => 'trendy-shoffices-and-pizza-ovens-raised-lockdown-fire-risks',
                    'meta_title'       => null,
                    'meta_description' => null,
                    'summary'          => null,
                    'content'          => '<div data-component="text-block">
<div>
<p>Trendy neighbours may have bought fire pits and pizza ovens during lockdown, or worked from home in a shoffice - but the risk of an expensive blaze grew.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>Insurer Zurich has warned that outbuilding fires - in sheds, garages and conservatories - rose by 16% last year compared with 2019.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>It said the popularity of conversions to home offices, gyms and domestic drinks bars increased the fire risk.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>Three-quarters of areas in the UK recorded more fires, the data shows.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>Phil Ost, from Zurich, said: "Aside from storing gardening tools, our sheds and garages have become a haven to escape the stresses of family life and for others, a place to work."</p>
</div>
</div>
<div id="piano-inline1"></div>
<div class="ssrcss-uf6wea-RichTextComponentWrapper e1xue1i87" style="margin: 1rem 0px; padding: 0px; border: 0px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: 400; font-stretch: inherit; font-size: 16px; line-height: inherit; font-family: ReithSans, Helvetica, Arial, freesans, sans-serif; vertical-align: baseline; max-width: 36.25rem; color: #3f3f42; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;" data-component="text-block">
<div class="ssrcss-18snukc-RichTextContainer e5tfeyi1" style="margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; color: #3f3f42; overflow-wrap: break-word;">
<p>"But as they take refuge in their garden sheds and garages, it appears to have sparked a rise in accidental blazes."</p>
<div data-component="text-block">
<div>
<p>In April, a survey by another insurer, Aviva, suggested that one in 10 of those asked worked from a converted shed, garage or summerhouse - a proportion expected to rise to 13%.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>The popularity of so-called shoffices - shed offices - has risen, with some people spending significant sums for&nbsp;<a href="https://www.bbc.co.uk/news/business-55845735">a luxury cabin</a>.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>The word garage also become the most popular search item on property website Rightmove, and planning applications to convert them rose sharply.</p>
</div>
</div>
<div class="ssrcss-18mjolk-ComponentWrapper e1xue1i810" style="margin: 1.5rem 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; vertical-align: baseline; max-width: 50rem;" data-component="image-block">
<figure class="ssrcss-15m9t32-StyledFigure e34k3c23" style="margin: 0px; padding: 0px; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: 0.875rem; line-height: 1.28571; vertical-align: baseline;">
<div class="ssrcss-ab5fd8-StyledFigureContainer e34k3c21" style="margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; position: relative;">
<div data-component="image-block">
<figure>
<div><img src="https://ichef.bbci.co.uk/news/976/cpsprodpb/DF6A/production/_117549175_whatsubject.jpg" srcset="https://ichef.bbci.co.uk/news/240/cpsprodpb/DF6A/production/_117549175_whatsubject.jpg 240w, https://ichef.bbci.co.uk/news/320/cpsprodpb/DF6A/production/_117549175_whatsubject.jpg 320w, https://ichef.bbci.co.uk/news/480/cpsprodpb/DF6A/production/_117549175_whatsubject.jpg 480w, https://ichef.bbci.co.uk/news/624/cpsprodpb/DF6A/production/_117549175_whatsubject.jpg 624w, https://ichef.bbci.co.uk/news/800/cpsprodpb/DF6A/production/_117549175_whatsubject.jpg 800w, https://ichef.bbci.co.uk/news/976/cpsprodpb/DF6A/production/_117549175_whatsubject.jpg 976w" alt="Garage" width="976" height="549" loading="lazy" />IMAGE SOURCEGETTY IMAGES</div>
</figure>
</div>
<div data-component="text-block">
<div>
<p>However, analysts said some people risked invalidating their insurance if they failed to inform their insurer about a new line of work, if it created extra risks.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>While some insurers have allowed people setting up in business at home to extend their cover at no extra cost, some people may need to buy new policies or pay larger premiums owing to the extra risk.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>There is also the risk that expensive equipment might bust insurance limits in existing policies if stolen or damaged.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>Electrical equipment, as well as popular lockdown purchases such as pizza ovens and fire pits, added to the existing fire risks created in gardens by mowers, barbecues, and paint thinners.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>Data collected by Zurich from UK fire authorities showed that there were 3,681 residential outbuilding fires recorded in 2020, compared with 3,170 the year before.</p>
</div>
</div>
<div data-component="image-block">
<figure>
<div><img src="https://ichef.bbci.co.uk/news/976/cpsprodpb/CABD/production/_117110915_2.58223653.jpg" srcset="https://ichef.bbci.co.uk/news/240/cpsprodpb/CABD/production/_117110915_2.58223653.jpg 240w, https://ichef.bbci.co.uk/news/320/cpsprodpb/CABD/production/_117110915_2.58223653.jpg 320w, https://ichef.bbci.co.uk/news/480/cpsprodpb/CABD/production/_117110915_2.58223653.jpg 480w, https://ichef.bbci.co.uk/news/624/cpsprodpb/CABD/production/_117110915_2.58223653.jpg 624w, https://ichef.bbci.co.uk/news/800/cpsprodpb/CABD/production/_117110915_2.58223653.jpg 800w, https://ichef.bbci.co.uk/news/976/cpsprodpb/CABD/production/_117110915_2.58223653.jpg 976w" alt="Warehouse fire in Denton" width="976" height="549" loading="lazy" />IMAGE SOURCE@BRIANJONES71</div>
<figcaption>image captionPeople lost belongings in a fire at storage units in Greater Manchester earlier this year</figcaption>
</figure>
</div>
<div data-component="text-block">
<div>
<p>Warnings have also been issued about property moved to self-storage units while people are working from home.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>Some warehouses have gone up in flames, with devastated customers speaking of how they have been&nbsp;<a href="https://www.bbc.co.uk/news/uk-england-manchester-56151896">unable to replace their lost belongings</a>.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>Stuart Bensusan, from insurance specialist Surewise, said: "It highlights the importance of thoroughly vetting any storage facility you use and taking the necessary steps to protect your possessions while they are in it."</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>"Many consumers have complete faith in storage units, and unfortunately it simply never crosses their minds that something might happen to their unit, or the whole building. This leads to many customers being under-insured or worse having no insurance cover at all."</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>Many storage unit operators offer insurance, but customers may shop around for cheaper deals, and some may have cover included through their home insurance policy.</p>
</div>
</div>
</div>
</figure>
</div>
</div>
</div>',
                    'thumbnail'     => 'files/shares/trendy-shoffices-and-pizza-ovens-raised-lockdown-fire-risks.jpg',
                    'published'     => 1,
                    'comment_count' => 0,
                    'published_at'  => '2021-08-18 10:44:24',
                ],
                8 => [
                    'id'               => 9,
                    'user_id'          => $user->id,
                    'parent_id'        => null,
                    'category_id'      => 3,
                    'title'            => 'Tesla Autopilot: US opens official investigation into self-driving tech',
                    'slug'             => 'tesla-autopilot-us-opens-official-investigation-into-self-driving-tech',
                    'meta_title'       => null,
                    'meta_description' => null,
                    'summary'          => null,
                    'content'          => '<div data-component="text-block">
<div>
<p>The US federal agency in charge of road safety is opening an official investigation into Tesla\'s "self-driving" Autopilot system.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>The National Highway Traffic Safety Administration (NHTSA) said it was acting following 11 Tesla crashes since 2018 involving emergency vehicles.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>In some cases, the Tesla vehicles "crashed directly into the vehicles of first responders", it said.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>The investigation will cover roughly 765,000 Tesla cars made since 2014.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>That includes those in the Model Y, Model X, Model S and Model 3, the NHTSA said - the entire current range.</p>
</div>
</div>
<div data-component="crosshead-block">
<h2>\'Control at all times\'</h2>
</div>
<div data-component="text-block">
<div>
<p>The agency was primarily concerned with an apparent inability of Tesla vehicles to cope with vehicles stopped in the road - specifically emergency vehicles attending an incident.</p>
</div>
</div>
<div id="piano-inline1"></div>
<div data-component="text-block">
<div>
<p>Among the list of cases was one where&nbsp;<a href="https://www.bbc.co.uk/news/technology-42801772">a Tesla "ploughed into the rear" of a parked fire engine</a>&nbsp;attending an accident, and&nbsp;<a href="https://www.bbc.co.uk/news/technology-44300952">another in which a parked police car was struck.</a></p>
</div>
</div>
<div data-component="text-block">
<div>
<p>The NHTSA said it was opening its preliminary investigation into "the technologies and methods used to monitor, assist, and enforce the driver\'s engagement", while using Autopilot.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>It said that in the 11 crashes that prompted its investigation, either Autopilot or a system called Traffic Aware Cruise Control had been active "just prior" to the collisions.</p>
</div>
</div>
<div data-component="unordered-list-block">
<div>
<div>
<ul role="list">
<li><a href="https://www.bbc.co.uk/news/technology-56854417">Tesla Autopilot \'tricked\' to run without driver</a></li>
<li><a href="https://www.bbc.co.uk/news/technology-51645566">Tesla crash driver \'was playing video game\'</a></li>
</ul>
</div>
</div>
</div>
<div data-component="text-block">
<div>
<p>The assistive technology allows the car to automatically steer, accelerate and brake.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p><a href="https://www.bbc.co.uk/news/technology-53418069">But it has come under fire for being misleading,</a>&nbsp;as it does not automatically drive the car and drivers are required to maintain control and attention at all times.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>Tesla has marketed the feature as an "Autopilot" and promised "full self-driving", which is now available to some users in a beta version.</p>
</div>
</div>
<div id="piano-inline2"></div>
<div data-component="text-block">
<div>
<p>Users have abused the system frequently in the past, with examples ranging from using their phones while the car drives unattended to switching car seats and leaving no driver at the wheel.</p>
</div>
</div>
<div data-component="media-block">
<figure>
<div>
<div id="bbcMediaPlayer0">
<div id="smphtml5iframebbcMediaPlayer0wrp"><iframe id="smphtml5iframebbcMediaPlayer0" lang="en-GB" title="Banned: 40mph and no one behind the wheel" src="https://emp.bbc.com/emp/SMPj/2.43.6/iframe.html" name="smphtml5iframebbcMediaPlayer0" frameborder="0" scrolling="no" allowfullscreen="allowfullscreen"></iframe></div>
</div>
</div>
<figcaption>media captionThis driver received a ban after being caught in the passenger seat in England</figcaption>
</figure>
</div>
<div data-component="text-block">
<div>
<p>In a statement, an NHTSA spokesperson said: "No commercially available motor vehicles today are capable of driving themselves. Every available vehicle requires a human driver to be in control at all times."</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>The investigation\'s supporting documents do, however, note the challenging circumstances involved in many of the collisions.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>"Most incidents took place after dark and the crash scenes encountered included scene control measures such as first responder vehicle lights, flares, an illuminated arrow board, and road cones," it reads.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>It comes days ahead of an event to showcase the car company\'s software.</p>
</div>
</div>
<div data-component="text-block">
<div>
<p>Chief executive Elon Musk had previously announced 19 August as "Tesla AI Day", which he said would showcase the progress of the firm\'s artificial intelligence systems - with a view to recruiting AI experts to the firm.</p>
</div>
</div>
<div id="piano-inline3"></div>
<div data-component="text-block">
<div>
<p>Tesla disbanded its public relations team in October 2020 and cannot be reached for comment.</p>
</div>
</div>',
                    'thumbnail'     => 'files/shares/tesla-autopilot-us-opens-official-investigation-into-self-driving-tech.jpg',
                    'published'     => 1,
                    'comment_count' => 0,
                    'published_at'  => '2021-08-18 10:45:17',
                ],
            ]);

            foreach ($posts as $key => $post) {
                Post::create($post);
            }

            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();

            throw new Exception('Exception occur '.$e);
        }
    }
}
