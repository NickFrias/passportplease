<?php

it('confirms that the welcome page is 200 and confirms the text on the title', function () {
    // Arrange: the page must exist in the route. IT'S NOT NEEDED TO TEST A STATIC PAGES!!!!

    //Act: visit the page
    $response = $this->get('/');
        
    //assert: the page is shown
    $response->assertStatus(200);
    $response->assertSee('PassportPlease'); 
});
