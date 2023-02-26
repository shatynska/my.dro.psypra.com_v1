import React, { useRef } from 'react';
import InputError from '@/Components/InputError';
import InputLabel from '@/Components/InputLabel';
import PrimaryButton from '@/Components/PrimaryButton';
import TextInput from '@/Components/TextInput';
import { useForm } from '@inertiajs/react';
import { Transition } from '@headlessui/react';
import useRoute from '@/Hooks/useRoute';

export default function UpdatePasswordForm({ className }: { className?: string }) {
    const route = useRoute();
    const passwordInput = useRef<HTMLInputElement>(null);
    const currentPasswordInput = useRef<HTMLInputElement>(null);
    const { data, setData, put, errors, reset, processing, recentlySuccessful } = useForm({
        current_password: '',
        password: '',
        password_confirmation: '',
    });

    const submit = (e: { preventDefault: () => void }) => {
        e.preventDefault();
        put(route('password.update'), {
            preserveScroll: true,
            onSuccess: () => reset(),
            onError: () => {
                if (errors.password) {
                    reset('password', 'password_confirmation');
                    passwordInput.current?.focus();
                }

                if (errors.current_password) {
                    reset('current_password');
                    currentPasswordInput.current?.focus();
                }
            },
        });
    };

    return (
        <section>
            <header className='mb-4 px-4 sm:px-0'>
                <h2 className='text-lg font-medium text-slate-900'>Update Password</h2>

                <p className='mt-1 text-sm text-slate-600'>
                    Ensure your account is using a long, random password to stay secure.
                </p>
            </header>

            <div className={className}>
                <form onSubmit={submit} className='space-y-6'>
                    <div>
                        <InputLabel forInput='current_password' value='Current Password' />

                        <TextInput
                            id='current_password'
                            ref={currentPasswordInput}
                            value={data.current_password}
                            onChange={(e) => setData('current_password', e.target.value)}
                            type='password'
                            autoComplete='current-password'
                            required
                        />

                        <InputError message={errors.current_password} className='mt-2' />
                    </div>

                    <div>
                        <InputLabel forInput='password' value='New Password' />

                        <TextInput
                            id='password'
                            ref={passwordInput}
                            value={data.password}
                            onChange={(e) => setData('password', e.target.value)}
                            type='password'
                            autoComplete='new-password'
                            required
                        />

                        <InputError message={errors.password} className='mt-2' />
                    </div>

                    <div>
                        <InputLabel forInput='password_confirmation' value='Confirm Password' />

                        <TextInput
                            id='password_confirmation'
                            value={data.password_confirmation}
                            onChange={(e) => setData('password_confirmation', e.target.value)}
                            type='password'
                            autoComplete='new-password'
                            required
                        />

                        <InputError message={errors.password_confirmation} className='mt-2' />
                    </div>

                    <div className='flex items-center gap-4'>
                        <PrimaryButton disabled={processing}>Save</PrimaryButton>

                        <Transition
                            show={recentlySuccessful}
                            enterFrom='opacity-0'
                            leaveTo='opacity-0'
                            className='transition ease-in-out'>
                            <p className='text-sm text-slate-600'>Saved.</p>
                        </Transition>
                    </div>
                </form>
            </div>
        </section>
    );
}
