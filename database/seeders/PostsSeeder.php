<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'title' => "Mount Merbabu Implements New Quota System for 2025 Hiking Season",
                'slug' => "mount-merbabu-quota-system-2025",
                'user_id' => 1,
                'category_id' => 3,
                'image' => "post-images/news.jpeg",
                'body' => "<div>  
                            Starting April 2025, Mount Merbabu National Park will enforce a new quota system to regulate the number of hikers allowed on the mountain each day. The new policy aims to reduce overcrowding, minimize environmental impact, and ensure a better experience for visitors. Authorities have announced that only 500 hikers per day will be permitted across all official routes, including Selo, Suwanting, and Wekas.<br><br>  
                            </div>  

                            <div>  
                            To secure a hiking permit, visitors must now register online through the official national park website. The park management has also introduced a “Leave No Trace” policy, requiring all hikers to carry trash bags and ensure they do not leave any waste on the mountain. Those caught violating the regulations may face fines or be banned from future hikes.<br><br>  
                            </div>  

                            <div>  
                            Park rangers and local guides will be stationed at checkpoints to monitor compliance and assist hikers in need. In addition to the new quota system, safety measures such as mandatory gear checks and weather advisories will also be implemented to enhance hiker preparedness.<br><br>  
                            </div>  

                            <div>  
                            The decision has been welcomed by conservationists and local trekking operators, who believe that sustainable tourism is crucial for preserving Mount Merbabu’s natural beauty. Hikers planning to visit are advised to book their permits well in advance and familiarize themselves with the updated regulations.<br><br>  
                            </div>"
            ],
            [
                'title' => "Packing Smart: What to Bring on a Hike",
                'slug' => "packing-smart-what-to-bring-on-a-hike",
                'user_id' => 1,
                'category_id' => 1,
                'image' => "post-images/tips_and_trick.jpeg",
                'body' => "<div>  
                            Packing the right gear can make or break your hiking experience. Carrying too much weight will slow you down, while missing essential items can put you in danger. The key is to pack light but smart.<br><br>  
                            </div>  

                            <div>  
                            Start with the basics: a sturdy backpack, a reliable map, and enough water. Food should be high in energy and easy to carry. Opt for protein bars, nuts, and dried fruits instead of heavy meals.<br><br>  
                            </div>  

                            <div>  
                            Clothing should be appropriate for the weather. Layering is crucial, as temperatures can change rapidly in the mountains. A waterproof jacket is a must, even if the forecast looks clear.<br><br>  
                            </div>  

                            <div>  
                            Don't forget emergency supplies. A first-aid kit, whistle, flashlight, and multi-tool can be lifesavers in unexpected situations. Being well-prepared ensures a safer and more enjoyable hike.<br><br>  
                            </div>"
            ],
            [
                'title' => "Mount Rinjani Officially Opens for 2025 Hiking Season",
                'slug' => "mount-rinjani-officially-opens-for-2025-hiking-season",
                'user_id' => 1,
                'category_id' => 2,
                'image' => "post-images/information.jpg",
                'body' => "<div>  
                            Mount Rinjani, one of Indonesia’s most popular hiking destinations, is officially open for the 2025 hiking season starting March 1st. The national park authorities have confirmed that all major trails, including the Senaru and Sembalun routes, have been inspected and deemed safe for hikers. The stunning Segara Anak Lake and summit viewpoints are now accessible again after months of closure for maintenance and trail recovery. This reopening is highly anticipated by local and international trekkers who have been waiting for the opportunity to explore Rinjani’s breathtaking landscapes once again.<br><br>  
                            </div>  

                            <div>  
                            To manage the environmental impact and maintain the fragile ecosystem of Mount Rinjani, a strict quota system is in place, limiting the number of daily hikers. Officials urge visitors to book their permits in advance through the official website or authorized tour operators. Rangers will also be stationed at various checkpoints to ensure compliance with park regulations, including proper waste disposal and responsible trekking practices. Anyone found violating these rules may face penalties, including fines or bans from future hikes.<br><br>  
                            </div>  

                            <div>  
                            Hikers are reminded to prepare adequately for the challenging terrain and unpredictable weather conditions. Proper gear, sufficient water, and a good level of physical fitness are essential for a successful summit attempt. The trails can be particularly demanding, with steep inclines and long trekking hours, so prior training and acclimatization are highly recommended. For those seeking a guided experience, several local trekking operators offer packages that include porters, meals, and camping gear to make the journey smoother.<br><br>  
                            </div>  

                            <div>  
                            If you're planning to hike Mount Rinjani this season, be sure to check the latest updates regarding permits and trail conditions. Weather conditions in the area can change rapidly, and it's always best to stay informed before starting your trek. Responsible hiking is encouraged to preserve the beauty of this majestic volcano for future generations. Respect the environment, follow the guidelines, and enjoy an unforgettable adventure on one of Indonesia’s most iconic mountains.<br><br>  
                            </div>"
            ],
            [
                'title' => "Choosing the Right Hiking Boots",
                'slug' => "choosing-the-right-hiking-boots",
                'user_id' => 1,
                'category_id' => 1,
                'image' => "post-images/tips_and_trick.jpeg",
                'body' => "<div>  
                            Wearing the right hiking boots is essential for comfort and safety. The wrong footwear can cause blisters, pain, and even injuries that could force you to cut your trip short. Many hikers underestimate the importance of proper footwear and end up with sore feet or ankle injuries. Before buying, consider the type of terrain you will be hiking on and choose your boots accordingly.<br><br>  
                            </div>  

                            <div>  
                            For rocky trails, choose boots with strong ankle support and a firm grip to prevent slips and falls. If you're hiking in wet or muddy areas, waterproof materials are a must to keep your feet dry and prevent blisters. Lightweight hiking shoes work best for short and easy trails, but for longer and more rugged hikes, high-cut boots provide additional support and protection.<br><br>  
                            </div>  

                            <div>  
                            Breaking in your boots before a major hike is crucial to prevent discomfort and blisters. Wear them around the house or on shorter walks to get used to the fit and ensure they don’t cause pain. A well-fitted boot should feel snug but not too tight, allowing your toes to move comfortably without excessive sliding inside the shoe.<br><br>  
                            </div>  

                            <div>  
                            Pair your boots with moisture-wicking socks to keep your feet dry and comfortable throughout the journey. Avoid cotton socks, as they retain moisture and increase the risk of blisters. Always carry an extra pair in case your feet get wet unexpectedly. A good pair of hiking boots can make your journey much more enjoyable and significantly reduce the risk of injuries. Invest wisely in quality footwear, as it’s one of the most important gears for a hiker.<br><br>  
                            </div>"
            ],
            [
                'title' => "Semeru National Park Announces Temporary Closure Due to Volcanic Activity",
                'slug' => "semeru-national-park-closure-2025",
                'user_id' => 1,
                'category_id' => 2,
                'image' => "post-images/information.jpg",
                'body' => "<div>  
                            Indonesia’s highest volcano, Mount Semeru, has been temporarily closed for hiking activities due to increased volcanic activity. Authorities from the Bromo Tengger Semeru National Park (TNBTS) have issued a notice stating that all hiking routes, including the Mahameru Summit Trail, are off-limits until further notice. This decision comes after the Geological Agency recorded a significant rise in volcanic tremors, indicating potential eruptions. The closure aims to ensure the safety of hikers and local communities living near the mountain.<br><br>  
                            </div>  

                            <div>  
                            The alert level for Mount Semeru has been raised, and residents in surrounding areas have been advised to remain cautious, especially those near rivers prone to cold lava flows (lahars). Authorities have set up monitoring posts and are continuously assessing the situation. While no major eruptions have been reported yet, the potential risks of landslides, ashfall, and sudden explosions make it unsafe for hiking at this time.<br><br>  
                            </div>  

                            <div>  
                            Hikers who had previously booked trekking permits for the coming weeks are urged to contact the park office for further instructions regarding refunds or rescheduling options. Tour operators and local guides have also been advised to pause all hiking trips and monitor official announcements. The closure is expected to last until the volcanic activity stabilizes, but authorities will provide regular updates based on geological assessments.<br><br>  
                            </div>  

                            <div>  
                            For those still eager to explore the beauty of East Java, alternative hiking destinations such as Mount Bromo and Mount Ijen remain open to visitors. Officials emphasize the importance of safety and encourage travelers to respect the temporary restrictions on Mount Semeru. Any attempt to enter the closed area illegally could result in legal consequences and endanger lives. Stay updated through official sources and plan your trekking adventures accordingly.<br><br>  
                            </div>"
            ],
            [
                'title' => "Review: Eiger Mountain Guide 45L – A Reliable Backpack for Multi-Day Hikes",
                'slug' => "review-eiger-mountain-guide-45l",
                'user_id' => 1,
                'category_id' => 4,
                'image' => "post-images/review.png",
                'body' => "<div>  
                            The Eiger Mountain Guide 45L is one of the most popular backpacks among Indonesian hikers, and for good reason. Designed for multi-day treks, this backpack offers a combination of durability, comfort, and functionality. With a 45-liter capacity, it provides enough space to carry essential gear without being overly bulky.<br><br>  
                            </div>  

                            <div>  
                            One of the standout features of this backpack is its ergonomic design. The adjustable straps and padded back panel ensure comfort even during long hikes. The load distribution system helps reduce strain on your shoulders, making it easier to carry heavy loads over rough terrain. The material is also water-resistant, providing extra protection during unexpected rain showers.<br><br>  
                            </div>  

                            <div>  
                            In terms of storage, the Mountain Guide 45L features multiple compartments, including a separate sleeping bag compartment, side mesh pockets, and a hydration bladder slot. The zippers are sturdy, and the reinforced stitching adds extra durability. However, some hikers have noted that the hip belt padding could be improved for better weight distribution.<br><br>  
                            </div>  

                            <div>  
                            Overall, the Eiger Mountain Guide 45L is a solid choice for hikers who need a reliable and comfortable backpack for multi-day trips. While it may not have the premium features of high-end international brands, it offers excellent value for money, making it a great investment for outdoor enthusiasts.<br><br>  
                            </div>"
            ],
            [
                'title' => "How to Navigate in the Wilderness Without Getting Lost",
                'slug' => "how-to-navigate-in-the-wilderness",
                'user_id' => 1,
                'category_id' => 1,
                'image' => "post-images/tips_and_trick.jpeg",
                'body' => "<div>  
                            Getting lost in the mountains can be a terrifying experience, especially for those who are unprepared. Before heading out, familiarize yourself with the trail map and key landmarks to minimize the risk of losing your way. Digital navigation tools are helpful, but don’t rely on them completely, as batteries can die, and signals can be weak in remote areas.<br><br>  
                            </div>  

                            <div>  
                            A physical map and compass are essential, especially in areas with poor GPS reception. Many experienced hikers recommend learning basic navigation skills such as reading topographical maps and using a compass to identify directions. Knowing how to orient yourself using natural cues like the position of the sun and landmarks is also a valuable skill.<br><br>  
                            </div>  

                            <div>  
                            Look for natural markers like rivers, rock formations, and distinctive trees to help you stay on course. Trails often have signs or cairns (piles of rocks) that guide hikers along the correct route. If you feel lost, stop moving immediately and try to recall the last recognizable landmark you passed before making any decisions.<br><br>  
                            </div>  

                            <div>  
                            Let someone know your hiking plans and expected return time before you leave. In case of an emergency, this information will help rescuers find you faster. Carrying a whistle, flashlight, or mirror can also help signal for help if needed. Navigation skills are crucial for every hiker, and investing time in learning them can greatly enhance your safety and confidence while exploring the wilderness.<br><br>  
                            </div>"
            ],
            [
                'title' => "Mount Gede-Pangrango Reopens After Months of Conservation Efforts",
                'slug' => "mount-gede-pangrango-reopens-2025",
                'user_id' => 1,
                'category_id' => 3,
                'image' => "post-images/news.jpeg",
                'body' => "<div>  
                        After months of closure for conservation and trail maintenance, Mount Gede-Pangrango National Park is set to reopen for hikers starting March 15, 2025. The closure allowed the ecosystem to recover from excessive foot traffic, with park officials implementing significant improvements in trail sustainability and visitor management.<br><br>  
                        </div>  

                        <div>  
                        To maintain the park’s natural beauty, new rules have been introduced, including a strict daily visitor cap of 600 hikers. All visitors must now register online in advance, and rangers will enforce a zero-waste policy, requiring hikers to bring back all trash they generate during their trek. The updated system aims to balance conservation with tourism while ensuring a safe and enjoyable hiking experience.<br><br>  
                        </div>  

                        <div>  
                        Alongside trail improvements, additional facilities such as reinforced footpaths, new signposts, and updated emergency response protocols have been put in place. Local guides and rangers have also undergone training to educate visitors on responsible trekking practices.<br><br>  
                        </div>  

                        <div>  
                        Hikers planning to explore Mount Gede-Pangrango are encouraged to check official updates regarding weather conditions and permit availability. The reopening is great news for nature enthusiasts, and officials hope that stricter regulations will help preserve the park’s biodiversity for years to come.<br><br>  
                        </div>"
            ],
            [
                'title' => "Mount Kerinci Basecamp Temporarily Closed Due to Trail Damage",
                'slug' => "mount-kerinci-basecamp-closure-2025",
                'user_id' => 1,
                'category_id' => 2,
                'image' => "post-images/information.jpg",
                'body' => "<div>  
                            The management of Mount Kerinci National Park has announced the temporary closure of its basecamp due to severe trail damage caused by recent heavy rains. Officials reported that multiple sections of the main trail have been affected by landslides, making it unsafe for hikers. The closure, which took effect on February 10, 2025, is expected to last until further assessments confirm the stability of the terrain. Hikers planning to climb Sumatra’s highest peak are advised to postpone their trips until further notice.<br><br>  
                            </div>  

                            <div>  
                            The heavy rainfall in recent weeks has not only caused landslides but also increased the risk of falling trees and unstable ground conditions along the trekking routes. Local authorities, along with park rangers, have been working to clear debris and reinforce affected areas. However, due to the unpredictable weather patterns, restoring the trails to a safe condition may take several weeks.<br><br>  
                            </div>  

                            <div>  
                            All trekking permits for the upcoming weeks have been suspended, and hikers who have already booked guided tours are encouraged to contact their operators for rescheduling or refunds. Local communities around Mount Kerinci, who rely on tourism, are also feeling the impact of the closure. However, safety remains the top priority, and authorities are urging all adventurers to respect the temporary restrictions.<br><br>  
                            </div>  

                            <div>  
                            For those looking for alternative climbs in Sumatra, nearby mountains such as Mount Tujuh and Mount Talang remain open and offer breathtaking hiking experiences. Officials will continue to monitor the situation and provide updates on when Mount Kerinci will reopen for trekking. Stay informed by following official announcements and always prioritize safety when planning your adventure.<br><br>  
                            </div>"
            ],
            [
                'title' => "Staying Hydrated During a Hike: Why Water is Your Best Friend",
                'slug' => "staying-hydrated-during-a-hike",
                'user_id' => 1,
                'category_id' => 1,
                'image' => "post-images/tips_and_trick.jpeg",
                'body' => "<div>  
                            Water is one of the most critical elements for a successful hike. Dehydration can lead to fatigue, dizziness, muscle cramps, and even life-threatening conditions like heat stroke. Many hikers make the mistake of carrying too little water, underestimating how much they will need, especially on long trails. Your body loses fluids quickly through sweat, particularly in high altitudes and hot weather, so proper hydration is crucial.<br><br>  
                            </div>  

                            <div>  
                            For a short hike, carrying a reusable water bottle may be enough, but for longer treks, consider a hydration pack or extra water bottles. The recommended amount of water varies depending on the difficulty of the hike and the climate, but a good rule of thumb is at least 0.5 liters per hour of moderate activity. If you're hiking in a hot or dry area, increase your water intake to prevent dehydration.<br><br>  
                            </div>  

                            <div>  
                            If your hike extends beyond a few hours, it's smart to bring a water filtration system or purification tablets. Natural water sources such as streams and lakes can be lifesavers, but drinking untreated water may expose you to harmful bacteria and parasites. A lightweight water filter or UV purifier can make a huge difference in keeping you hydrated safely.<br><br>  
                            </div>  

                            <div>  
                            In addition to water, consuming electrolyte-rich drinks or snacks can help replenish lost minerals and prevent dehydration symptoms. Fruits like bananas and oranges, as well as electrolyte powders or tablets, can be great additions to your hiking kit. Staying well-hydrated will keep your energy levels up and ensure a safer and more enjoyable hike. Always plan ahead and bring more water than you think you'll need—your body will thank you for it!<br><br>  
                            </div>"
            ],
            [
                'title' => "Lost on Mount Gede: A Lesson in Patience and Survival",
                'slug' => "lost-on-mount-gede",
                'user_id' => 1,
                'category_id' => 5,
                'image' => "post-images/story.jpg",
                'body' => "<div>  
                            What was supposed to be a simple weekend hike on Mount Gede turned into one of the scariest experiences of my life. My group and I had planned a two-day trek, but a wrong turn led us off the marked trail. At first, we thought we could find our way back easily, but as time passed and the sun began to set, panic started creeping in.<br><br>  
                            </div>  

                            <div>  
                            With no clear path in sight, we decided to stay put and conserve our energy. We had limited food and water, and our phone signals were weak. It was a test of patience and mental strength. To keep our spirits up, we built a small fire and took turns staying awake to ensure our safety. The night felt endless, filled with strange sounds and an eerie darkness.<br><br>  
                            </div>  

                            <div>  
                            The next morning, we heard the sound of flowing water and decided to follow it, hoping it would lead us back to a familiar route. After hours of walking, we finally stumbled upon another group of hikers who guided us back to safety. The relief was indescribable. We learned the hard way that preparation and navigation skills are just as important as physical endurance in hiking.<br><br>  
                            </div>  

                            <div>  
                            Getting lost on Mount Gede was a frightening yet valuable experience. It taught us to respect the mountains, to always be prepared, and to stay calm in challenging situations. Now, every time I hike, I double-check my route and carry extra supplies—because you never know what the mountain has in store for you.<br><br>  
                            </div>"
            ],
            [
                'title' => "Mount Merbabu to Implement Stricter Regulations for Hikers in 2025",
                'slug' => "mount-merbabu-new-hiking-regulations-2025",
                'user_id' => 1,
                'category_id' => 2,
                'image' => "post-images/information.jpg",
                'body' => "<div>  
                            Starting April 1, 2025, new regulations for hiking Mount Merbabu will be enforced by the national park authorities to promote environmental conservation and responsible trekking. The most significant changes include a reduction in the daily visitor quota, stricter waste management policies, and mandatory pre-registration for all hikers. The decision follows concerns over increasing environmental damage caused by overcrowding and littering on the mountain.<br><br>  
                            </div>  

                            <div>  
                            The new regulations will limit the number of daily hikers to 500 across all official trails, including Selo, Suwanting, and Wekas. This is a significant reduction compared to previous years, where thousands of hikers visited the mountain on peak weekends. Authorities hope that by limiting the number of visitors, the ecosystem will have time to recover, especially fragile areas like the grasslands near the summit.<br><br>  
                            </div>  

                            <div>  
                            Additionally, hikers will now be required to bring reusable trash bags and participate in a 'Leave No Trace' policy. Park rangers will check all hikers at the entrance and exit points to ensure compliance. Those caught littering or damaging the environment may face fines or be banned from future hikes. To improve safety, all climbers must also complete an online registration before arriving at the basecamp.<br><br>  
                            </div>  

                            <div>  
                            Local guides and trekking operators have welcomed the changes, emphasizing that responsible tourism is necessary to protect Mount Merbabu’s natural beauty. Hikers planning to visit the mountain are advised to book their permits early due to the limited slots. As the new policies take effect, authorities hope to create a more sustainable hiking experience while preserving one of Central Java’s most beloved mountains.<br><br>  
                            </div>"
            ],
            [
                'title' => "Essential First Aid Tips for Hikers: Be Prepared for Anything",
                'slug' => "essential-first-aid-tips-for-hikers",
                'user_id' => 1,
                'category_id' => 1,
                'image' => "post-images/tips_and_trick.jpeg",
                'body' => "<div>  
                            Hiking injuries can happen anytime, and being prepared with basic first-aid knowledge can make all the difference in an emergency. Even minor injuries like blisters, small cuts, or insect bites can become serious if left untreated. The first step to ensuring your safety is carrying a well-stocked first-aid kit that includes essentials like bandages, antiseptic wipes, pain relievers, and medical tape.<br><br>  
                            </div>  

                            <div>  
                            Apart from physical injuries, hikers also need to be aware of potential medical emergencies such as dehydration, altitude sickness, and heat exhaustion. Knowing the symptoms of these conditions can help prevent them from escalating. If a fellow hiker shows signs of dizziness, confusion, or nausea, it’s crucial to stop and provide immediate aid. Encourage them to drink water, rest in the shade, and, if necessary, descend to a lower altitude.<br><br>  
                            </div>  

                            <div>  
                            Blisters are one of the most common hiking injuries and can be incredibly painful if not treated early. Applying moleskin or a blister bandage as soon as you feel discomfort can prevent them from getting worse. If you develop a deep cut or sprain, immobilizing the affected area and seeking help as soon as possible is the best course of action. Carrying a whistle can also help you signal for assistance in case of an emergency.<br><br>  
                            </div>  

                            <div>  
                            One of the most important hiking safety tips is prevention. Wearing proper footwear, using trekking poles for stability, and staying on marked trails can significantly reduce the risk of injury. Taking a basic first-aid training course before your trip can also be invaluable, equipping you with the knowledge to handle minor injuries and emergencies effectively. Always be prepared—your safety depends on it!<br><br>  
                            </div>"
            ],
            [
                'title' => "Solo Hiking Mount Rinjani: Finding Strength in Solitude",
                'slug' => "solo-hiking-mount-rinjani",
                'user_id' => 1,
                'category_id' => 5,
                'image' => "post-images/story.jpg",
                'body' => "<div>  
                            Hiking alone had always been something I wanted to try, and Mount Rinjani seemed like the perfect challenge. With its breathtaking views and demanding trails, I knew this journey would test both my physical and mental strength. The first day was tough as I struggled with the weight of my backpack and the long trek towards the crater rim.<br><br>  
                            </div>  

                            <div>  
                            As night fell, I set up my tent under a sky full of stars. The solitude was peaceful yet intimidating. Every sound of rustling leaves and distant footsteps made me alert, but over time, I embraced the silence and found comfort in my own presence. It was a moment of self-reflection, a rare opportunity to disconnect from the chaos of everyday life.<br><br>  
                            </div>  

                            <div>  
                            Reaching the summit at sunrise was an emotional moment. Standing at the top, overlooking the magnificent Segara Anak Lake, I felt an overwhelming sense of accomplishment. The exhaustion and struggles of the past two days faded, replaced by an incredible feeling of gratitude and strength. I realized that solitude is not loneliness; it’s a chance to rediscover yourself.<br><br>  
                            </div>  

                            <div>  
                            Descending Rinjani, I carried more than just memories—I carried newfound confidence and a deeper connection with nature. Solo hiking taught me resilience, patience, and the beauty of embracing the unknown. If you're ever hesitant about going on an adventure alone, take the leap. The journey within is just as rewarding as the destination.<br><br>  
                            </div>"
            ],
            [
                'title' => "Basecamp Review: Selo Basecamp – The Best Starting Point for Merbabu Summit",
                'slug' => "review-selo-basecamp-merbabu",
                'user_id' => 1,
                'category_id' => 4,
                'image' => "post-images/review.png",
                'body' => "<div>  
                            If you're planning to climb Mount Merbabu, Selo Basecamp is one of the best starting points. Located in Boyolali, Central Java, this basecamp offers excellent facilities, a friendly atmosphere, and easy access to the hiking trail. Over the years, Selo Basecamp has become a favorite among hikers due to its well-maintained infrastructure and strategic location.<br><br>  
                            </div>  

                            <div>  
                            One of the highlights of Selo Basecamp is its well-organized registration system. Hikers can easily obtain permits, rent gear, and receive trail briefings from local guides. The basecamp also offers accommodations for those who wish to rest before starting their trek. Basic rooms, camping areas, and even small restaurants are available to ensure a comfortable stay.<br><br>  
                            </div>  

                            <div>  
                            In terms of amenities, Selo Basecamp provides clean toilets, parking space, and a small shop selling last-minute supplies like snacks, water, and raincoats. Many hikers appreciate the warm and welcoming service from the local staff, who are always ready to assist with any inquiries.<br><br>  
                            </div>  

                            <div>  
                            While Selo Basecamp is well-equipped, it can get crowded during peak seasons, so it’s recommended to arrive early or book accommodations in advance. If you're looking for a well-managed and hiker-friendly basecamp before conquering Mount Merbabu, Selo Basecamp is definitely a top choice!<br><br>  
                            </div>"
            ],
            [
                'title' => "Surviving the Unexpected: A Hiker’s Journey Through a Storm on Mount Semeru",
                'slug' => "surviving-storm-mount-semeru",
                'user_id' => 1,
                'category_id' => 5,
                'image' => "post-images/story.jpg",
                'body' => "<div>  
                            Hiking Mount Semeru had always been my dream, but I never expected to face one of the toughest challenges of my life on its slopes. My group and I started our trek full of excitement, blessed with clear skies and great energy. Everything seemed perfect until we reached Kalimati Camp, where dark clouds suddenly gathered, and strong winds signaled an approaching storm.<br><br>  
                            </div>  

                            <div>  
                            As we set up our tents, heavy rain poured down, followed by deafening thunder. The wind was so strong that our tents barely stood firm. We huddled together, trying to keep warm while securing our gear from getting soaked. The temperature dropped drastically, and visibility was nearly zero, making it impossible to continue our climb to the summit.<br><br>  
                            </div>  

                            <div>  
                            The storm lasted for hours, forcing us to change our plans. Instead of reaching the peak, we focused on staying safe and waiting for the weather to clear. It was a test of endurance and teamwork, as we relied on each other to keep our spirits high. The experience taught us that nature is unpredictable and that proper preparation is the key to survival.<br><br>  
                            </div>  

                            <div>  
                            Though we didn’t reach the summit, the journey was unforgettable. The storm humbled us, reminding us of the raw power of nature. We left Semeru with a deep respect for the mountains and a renewed appreciation for the importance of safety in every adventure.<br><br>  
                            </div>"
            ],

        ];

        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
