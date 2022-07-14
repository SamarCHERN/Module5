<?php

namespace App\Command;

use App\Repository\UserRepository;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class CreateUserCommand extends Command
{
    protected static $defaultName = 'app:SendEmail';
    protected static $defaultDescription = 'Add a short description for your command';
    private $userRepository;
    private $mailer;
    public function __construct(UserRepository $userRepository, MailerInterface $mailer )
    {
        parent::__construct(null);
        $this->userRepository = $userRepository;
        $this->mailer=$mailer;
    }
    protected function configure(): void
    {
        $this
            ->setDescription(self::$defaultDescription)
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $users = $this->userRepository
        ->findByUsers('admin@talan.com');
        $io->progressStart(count($users));
        foreach ($users as $user) {
            $io->progressAdvance();
            $Address=$user->getEmail();
            $Name=$user->getUserName();
            $email = (new Email())
            ->from('admin@talan.com')
            ->to($Address)
            ->subject('Bonjour')
            ->text('Bonjour, Nous vous souhaitons une agréable journée')
            ->html('Bonjour '.$Name.', Nous vous souhaitons une agréable journée');
             sleep(10); 
             $this->mailer->send($email);
        }
        $io->progressFinish();
        $io->success(' Email sent to users!');
        return 0 ;
    }
}
