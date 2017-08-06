
What the point with vim ?
=========================

This is my first article and it's not the easier. I'd like to not fall in another stupid article from a vim hacker. I'd like to explain why I will stay on vim for probably a long time.

The developers tool
--------------------

A developer must have tools to transform efficiently his reflections to algorithms and automates. A developer who sticks to binary codes will create faster programs but will be attached to the simplest.

When I question collaborators about their core functionalities, they reply me almost the sames things.
- I want an efficient auto-completion
- I want go-to-definition system
- I want search in files tool
- I want compilation error reporting
- I want efficient files exploration tool

Next, they question me what is my core functionalities. I reply them that my core tool is a powerful text editor. Text editor is the number one tool. You'll type code, configurations, presentation, documentation, etc. Everything you'll do will start by writing something. Put down your thinkings, send e-mails.

And that's it. Ironically I already got all these functionalities just by terminal.

Unix philosophy
--------------

One of the most common opinion in open source is the Unix philosophy.
"The Unix philosophy emphasizes building simple, short, clear, modular, and extensible code that can be easily maintained and repurposed by developers other than its creators. The Unix philosophy favors composability as opposed to monolithic design." Wikipedia.
Another word I really like about this philosophy is KISS (Keep it simple, stupid).

The goals of this thinking by keeping tools separated are multiples :
- Be able to switch them : Keep the possibility to use one or another tool. Be able to use one slinter based on NodeJS or the other based on a native language allow you to be flexible. In your computer you can use one, on your server the other. You probably don't use only one kitchen in your kitchen.
- Keep productivity : If you have one tool to do everything, you'll lose productivity. You'll have to wait your IDE before been able to continue the work. How many times I saw collaborators wait for PhpStorm to "index" files. The worst is that lot of these collaborators don't know what their IDE do by "indexing" files... When I think about "Universal-ctags" who process my project, all languages in the same time, in just 2.5s, I just want to cry.
- Use the best : If you have to find and test different tools, you'll find the best on the domain. An example I can give you is 'Silversearch-ag'. This will tool you allow you to search string patterns in files. But he'll do this REALLY QUICKLY. A huge project, a thousand of code line, and the tool will give you the occurrences in less than a half second.
- Use what you need : Only keep pencils you use in your pencil case. You'll be lighter and gain speed.
- Understand your tools : Don't just press buttons without knowing what you do. If you have to search tools, you'll have to know what you need. You'll have to put a name on your them. How do you call your 'Ctrl + click' on your function name who will bring you to the definition ? How this tool works ? How your IDE can know where to bring you ?
- Be free : Simpliest, mono task and efficient tools are open source and free. This is not causality effect. This is not just correlation. But this is the reality. The thing is that this is a lot easier to a single man in his bedroom to maintain his tool if it's simple. Behind huge IDEs, there is company cause they need a lot of production capacity. The fact is that theses IDEs are not better, they are just a compilation of the worst tools. You cannot do everything better.

The Unix philosophy give you a lot of advantages. So how do we start ?

Vim in center
-------------

When I open my vim outside of my regular work place, I'm targeted like an alien. People think I'm hacking the NASA, people question me about my intention, people think they can't understand what I'm doing. Collaborators also question me about this strange thing. Why I stick with this ugly buttonless piece ? Why do not I use my mouse ? Mouse is faster in all way no ? How can I work without auto-completion (I do not but they don't see it).

So let's start from the beginning :
I use vim cause it's the better text editor, by far away. But people have to understand that Vim doesn't have the ambition to do everything. Vim is not a git project manager. Vim is not a file manager. Vim want to be an efficient text editor. It provides a very solid base on which you can add the configurations that fits to you.
Vim do not lack of common functionalities. Vim got spell checking, auto-completion (from dictionary and from language based syntax), tags management (the 'Ctrl + click' to go to declaration).

Vim is long to take in hand. It has a really different approach of file editing. Vim use patterns that are easy to understand, keep in mind and automate. Vim is not just click somewhere in the window and press keys to add text. Vim is think of text edition by actions. Go here. Delete until that. Replace this pattern by this one. Insert this block of words. Add ";" at the end of the line. Mhh, on the next one too.
Tabs are anti pattern. We prefer buffers. We do not like visual distractions. We scroll files page by page. We don't use tree view to switch files. But I can promise you, you can do everything you need better with Vim cause everything in Vim is think to be efficient.

So what IDE got if Vim is so well thought ? IDE will save you early times. Over.

What Vim does that IDE can't ?
----------------------------

- Stay 100 efficient without graphical interface. I saved my computers dying with vim. When your graphical interface is dead, stay the terminal. You can too work in distant servers across ssh with vim. You can work with your smartphone connected to your distant computer. Terminals is stable, terminals is light, terminals focus on report only useful information. I like terminals.
- Keep undo history just like forever. Go back in time, 5 minutes, 30 minutes, 5 hours, 5 months earlier. Keeping all changes in mind. I think you can forget git on personals projects. Mhh, let's forget this idea...
- Be what you want. There is so many possibilities to customize Vim. Add syntax handling, customize the way Vim will indent one filetype, change how it will auto-complete one sentence. There is just no limit.

Vim or Vim ?
------------

I made mistakes on my Vim way. In my early days with my Text Eddie-tor, like lot of Vimer, I used plugins. LOT of plugins. Plugins are the dark side of the force. "Does the dark side be the stronger ? No, no, no. Quicker, easier, more seductive." Master Yoda to Luke Skywalker.
Plugins will give you unlimited power but, you'll lose some Vim advantages. You'll need your plugins to use Vim. You'll need NERDTreePlugin to surf your projects. You'll need Fugitive cause "It's faster than press Ctrl + Tab". Vim will become a monster thing that take 10 minutes to install all plugins with the Plug manager. Installing and compiling YouCompleteMe and FZF etc. It will take 3 second to swap buffers. Plugins incompatibility will throw errors.

Let me tell you one thing. 99% of what plugins do, Vim already do. Fast file exploration is native with netrw. Fast auto-completion is native with Omnicomplete. Spell checking is native. Why do you need NERDTree that just can't delete multiple files in same times ? Why do you need this stupid thing that make appear distractive letters all around the screen to jump to another point ?
Keep in mind the dark side is everywhere. Before installing plugins, re-think of what you really need ?
My personal idea is to just install syntax based configuration. I override Html syntax to Html5 updates. I have build a twig template handler. I override Php Omnicomplete function to fit with new ctags norms. I have some little fixes to remove useless spaces or preserve screen position on buffer swap and some other things.

But the think is : I do not judge other Vimer that stick with plugins cause this is the Unix philosophy. Use different tools, the tools you need, the tools you choose, the tools that make you gain times. Use what works for you. If stick with IDEs go for it. I just want to explain why I stick with Vim.
