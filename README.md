<h1 align="center">PHP Alfred Workflow Workflow</h1>

<p align="center">
    <a href="https://packagist.org/packages/godbout/alfred-workflow-workflow"><img src="https://poser.pugx.org/godbout/alfred-workflow-workflow/v/stable" alt="Latest Stable Version"></a>
    <a href="https://travis-ci.com/godbout/alfred-workflow-workflow"><img src="https://img.shields.io/travis/com/godbout/alfred-workflow-workflow/master.svg" alt="Build Status"></a>
    <a href="https://scrutinizer-ci.com/g/godbout/alfred-workflow-workflow"><img src="https://img.shields.io/scrutinizer/g/godbout/alfred-workflow-workflow.svg" alt="Quality Score"></a>
    <a href="https://scrutinizer-ci.com/g/godbout/alfred-workflow-workflow"><img src="https://scrutinizer-ci.com/g/godbout/alfred-workflow-workflow/badges/coverage.png?b=master" alt="Code Coverage"></a>
    <a href="https://packagist.org/packages/godbout/alfred-workflow-workflow"><img src="https://poser.pugx.org/godbout/alfred-workflow-workflow/downloads" alt="Total Downloads"></a>
</p>

<p align="center">
    Tired of writing the same code over and over just to get your new Workflow up and running? Yeah me too.
</p>

___

## DOUBLE WHAMMY WORKFLOW

An [Alfred](https://alfredapp.com/) [Workflow](https://www.alfredapp.com/workflows/) does only two things: 

    1. show results  
    2. do an action  
    2.5. ok send a notification, maybe

which means, why typing over and over those same stuff over and over. I say stop to wasting keyboard keys. (Even more if you work on a MacBook because the keyboard will break soon.)

## BUT WTF IS THAT, REALLY

Basically it's a set of base classes and some conventions and an Alfred Workflow Skeleton to get you up in no time. Follow the conventions and all you have to do is create your Menus, and your Actions. All the boring rest is handled by the Skeleton, and this package. The common glue is taken care of. You focus only on the specificity of your Workflow.

## Installation

```bash
composer require godbout/alfred-workflow-workflow
```

## Usage

Have your own `Workflow` class extend `BaseWorkflow`:

```php
<?php

namespace Me\MyDummyWorkflow;

use Godbout\Alfred\Workflow\BaseWorkflow;

class Workflow extends BaseWorkflow
{
    // your Workflow actions go here
}
```

## The Conventions

Well this is where it gets interesting, because i'm still not sure how to express it. Best currently is to go through different use cases together:

### Alfred Ploi

This is the most straightforward one. 

* [Alfred Time](https://github.com/godbout/alfred-time/tree/master/src)
* [Alfred Kat](https://github.com/godbout/alfred-kat/tree/master/src)
* [Alfred Ploi](https://github.com/godbout/alfred-ploi/tree/develop/src)

Sorry 🥺️🥺️🥺️ more later, promise. Till then you can contact me if you need more details.

