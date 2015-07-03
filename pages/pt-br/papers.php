      <div id="papers">
	<h1>Artigos</h1>
	
	<p>
        <img src="/image/pdf.icon.jpg"/>
        <a href="/papers/roos-pets2014.pdf">Measuring Freenet in the Wild: Censorship-resilience under Observation</a> (PDF)<br/>
        Observations and measurements on the live Freenet network. Includes suggestions
        for improvement. This was submitted to PETS 2014.
	</p>

	<p>
	  <img src="/image/pdf.icon.jpg"/>
	  <a href="/papers/freenet-0.7.5-paper.pdf">The Dark Freenet</a> (PDF)<br/>
	  Detailed paper about the Freenet 0.7.5 network, as opposed to its routing algorithm, which is detailed in the
	  below papers. Includes some new simulations. This has been submitted to PET 2010.
	</p>

	  <img style="margin-right: 16px;" src="/image/video.icon.png" />
	<p>

	  <a href="/22c3vid.html">Video of Small World talk, Berlin, December 2005</a><br/>
	  This is a video of a talk given by Ian Clarke and Oskar
	  Sandberg at the Chaos Computer Congress in Berlin, December
	  2005, describing the (then) new architecture for Freenet
	  0.7.  You can also download
	  the <a href="/papers/ccc/ccc-slideshow.pdf.bz2">slideshow</a>,
	  and the source for the Java <a href="/papers/ccc/ccc-freenet-demo.tar.bz2">demo</a> 
	  (requires Java 1.5).
	</p>
	
	<p>
	  <img src="/image/pdf.icon.jpg"/>
	  <a href="/papers/lic.pdf">Searching in a Small World</a> (PDF)<br/>
	  Oskar Sandberg's licentiate thesis describing a simple decentralized mechanism for constructing small world
	  networks that is inspired by Freenet's original design.  Part II of the thesis describes the basis for
	  the new Darknet architecture.
	</p>
	
	<p>
	  <img src="/image/pdf.icon.jpg"/>
	  <a href="/papers/swroute.pdf">Distributed routing in Small World Networks</a> (PDF)<br/>
	  A paper by Oskar Sandberg describing the theoretical basis for the new "Darknet" routing mechanism employed
	  by Freenet 0.7.
	</p>
	<p>
	  <img src="/image/pdf.icon.jpg"/>
	  <a href="http://events.ccc.de/congress/2005/fahrplan/events/492.en.html">Chaos Computer Congress Talk</a> 
	  (slideshow)<br/>
	  This is a <a href="/papers/ccc/ccc-slideshow.pdf.bz2">slideshow</a> for a talk given 
	  at the Chaos Computer Congress on 30th Dec 2005 in Berlin, Germany by Ian 
	  Clarke and Oskar Sandberg.  It described the new "darknet" approach to be employed in Freenet 0.7.  A Java 
	  demonstration to accompany the talk is <a href="/papers/ccc/ccc-freenet-demo.tar.bz2">also</a> available.
	</p>

	<p>
	  <img src="/image/pdf.icon.jpg"/>
	  <a href="/papers/vilhelm_thesis.pdf">Switching for a small world</a> (PDF)<br/>
	  A thesis by Vilhelm Verendel exploring ways to optimise the swapping algorithm.
	</p>
	<p style="margin-left: 39px;">
	  <a href="/ngrouting.html">Next Generation Routing Algorithm</a><br/>
	  This article describes Freenet's "Next Generation" routing algorithm.  This was a novel
	  approach which had nodes making routing decisions based on sophisticated analysis of
	  the time required to route previous requests.  This algorithm was promising, but
	  was eventually dropped in favour of a much simpler approach in Freenet 0.7.
	</p>
	<p>
	  <img src="/image/pdf.icon.jpg"/>
	  <a href="/papers/freenet-ieee.pdf">Protecting Freedom of Information 
	    Online with Freenet</a> (PDF)<br/>
	  An IEEE Internet Computing article describing the Freenet architecture 
	  circa 2002 - probably the best introduction to the theory behind 
	  Freenet.
	</p>
	<p>
	  <img src="/image/pdf.icon.jpg"/>
	  <a href="/papers/ddisrs.pdf">FreeNet White Paper</a> (PDF)<br/>
	  Original white paper by Ian Clarke, Division of Informatics, University of Edinburgh 1999.
	</p>
	<hr/>
	<p>
	  <img src="/image/pdf.icon.jpg"/>
	  <a href="http://www.ukp.tu-darmstadt.de/fileadmin/user_upload/Group_P2P/share/publications/Attack_Resistant_Network_Embeddings_for_Darknets.pdf">Attack Resistant Network Embeddings for Darknets</a> (PDF)<br/>
	  A proposal for changing the darknet swapping algorithm which we are still considering
	  (we have some doubts about long-term performance).
	</p>
	<p>
	  <img src="/image/pdf.icon.jpg"/>
	  <a href="http://www.p2p.tu-darmstadt.de/publications/details/?no_cache=1&tx_bibtex_pi1%5Bpub_id%5D=TUD-CS-2013-0036">A Contribution to Analyzing and Enhancing Darknet Routing</a> (<a href="http://www.p2p.tu-darmstadt.de/fileadmin/user_upload/Group_P2P/share/INFOCOM.pdf">PDF</a>)<br/>
	  A proposal for changing the routing algorithm which we are still considering (the worst case 
	  performance i.e. when a block has been lost may be unacceptable).
	</p>
	<p>
	  <img src="/image/pdf.icon.jpg"/>
	  <a href="https://www.icsi.berkeley.edu/icsi/sites/default/files/events/events_1303_strufe.pdf">Presentation: Towards "Dark" Social Networking Services (Strufe et al)</a> (PDF)<br/>
	  An interesting presentation by the group responsible for the two above papers.
	</p>
	<p>
	  <img src="/image/pdf.icon.jpg"/>
	  <a href="http://arxiv.org/abs/1208.6326">Pisces: Anonymous Communication Using Social Networks</a><br/>
	  An algorithm for setting up onion-like tunnels on darknets. We may implement this for Freenet 0.8/0.9.
	</p>
	<p>
	  <img src="/image/pdf.icon.jpg"/>
	  <a href="http://grothoff.org/christian/pitchblack.pdf">Routing in the Dark: Pitch Black</a> (<a href="http://citeseerx.ist.psu.edu/viewdoc/summary?doi=10.1.1.117.1543">citeseer</a>) (PDF)<br/>
	  A paper describing some attacks on Freenet 0.7's location swapping algorithm. We have solutions for this
	  but they are still being tested.
	</p>
	<hr/>
	<p>
	  The most up to date reference is of course <a href="/developer.html">the source code</a>, but
	  there is also some useful documentation on <a href="https://wiki.freenetproject.org/">the wiki</a>
	  (you may have to search a bit), and most implemented ideas have been discussed in detail on
	  <a href="/lists.html">the mailing lists</a> at some point, more recently ofen in-Freenet forums 
	  such as FMS, or <a href="https://bugs.freenetproject.org/">the bug tracker</a>.
	</p>
	</div>
